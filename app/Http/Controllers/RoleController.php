<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Detail;
use App\Models\Produk;
use App\Models\Varian;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pesanan::where('tanggal', '>=', now()->subDays(6)->startOfDay())
            ->selectRaw('DATE(tanggal) as tanggal, COUNT(*) as jumlah')
            ->groupByRaw('DATE(tanggal)')
            ->orderByRaw('DATE(tanggal)')
            ->get();

        // Buat array lengkap 7 hari ke belakang
        $tanggalArray = [];
        $totalArray = [];

        for ($i = 6; $i >= 0; $i--) {
            $tgl = now()->subDays($i)->format('Y-m-d');
            $label = now()->subDays($i)->format('d M');

            $tanggalArray[] = $label;

            // cari total pada tanggal itu
            $found = $data->firstWhere('tanggal', $tgl);
            $totalArray[] = $found ? (int)$found->jumlah : 0;
        }
        $pesan = Pesanan::where('status', 'disiapkan')->get();

        $produkTerlaris = Detail::join('varians', 'details.varian_id', '=', 'varians.id')
            ->join('produks', 'varians.produk_id', '=', 'produks.id')
            ->select('produks.nama', DB::raw('SUM(details.jumlah) as total_terjual'))
            ->groupBy('produks.id', 'produks.nama')
            ->orderByDesc('total_terjual')
            ->limit(10)
            ->get();

        $namaProduk = $produkTerlaris->pluck('nama');
        $jumlahTerjual = $produkTerlaris->pluck('total_terjual');

        $jumlahProduk = Produk::count();
        $jumlahPengguna = User::where('role_id', 2)->count();
        $jumlahPesanan = Pesanan::count();

        return view('admin/beranda', [
            'tanggal' => $tanggalArray,
            'total' => $totalArray,
            'pesan' => $pesan,
            'namaProduk' => $namaProduk,
            'jumlahTerjual' => $jumlahTerjual,
            'produk' => $jumlahProduk,
            'user' => $jumlahPengguna,
            'pesanan' => $jumlahPesanan
        ]);
        //
    }




    /**
     * Show the form for creating a new resource.
     */
    public function produk(Request $request)
    {
        $keyword = $request->input('pencarian');
        $knob = $request->input('knob');
        $layout = $request->input('filter');

        // $favorit = Favorit::where('user_id', Auth::id())->get()->keyBy('produk_id');


        $varians = Varian::with('produk.varian') // ini penting
            ->whereIn('id', function ($query) {
                $query->selectRaw('MIN(id)')
                    ->from('varians')
                    ->groupBy('produk_id');
            });
        if (!empty($keyword) || $knob || $layout) {
            $varians->whereHas('produk', function ($query) use ($keyword, $knob, $layout) {
                if (!empty($keyword)) {
                    $query->where('nama', 'like', "%$keyword%");
                }
                if ($knob == 1) {
                    $query->where('knob', 1);
                }
                if (in_array($layout, ['60%', '65%', '75%', '80%', '95%', '100%'])) {
                    $query->where('layout', $layout);
                }
            });
        }
        $hasil = $varians->paginate(10);

        $produk = Produk::with(['fitur', 'varian'])->get()->keyBy('id');


        return view('admin/produk/produk', [
            'varian' => $hasil,
            'produk' => $produk
            // 'fav' => $favorit
        ]);
        // return view('admin/produk/produk');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function user(Request $request)
    {
        $query = User::where('role_id', 2);

        if ($request->input('pencarian')) {
            $search = $request->input('pencarian');

            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%$search%")
                    ->orWhere('email', 'like', "%$search%");
                // ->orWhere('nomor', 'like', "%$search%");
            });
        }

        $user = $query->paginate(50);
        return view('admin/user/user', [
            'user' => $user
        ]);
        //
    }

    /**
     * Display the specified resource.
     */
    public function pesan(Request $request)
    {
        // $pesan = Pesanan::with(['detail'])->get()->paginate(2)->withQueryString();
        $query = Pesanan::with('detail');

        // Filter tanggal mulai & akhir
        if ($request->filled('tanggal_awal') && $request->filled('tanggal_akhir')) {
            $query->whereBetween('created_at', [
                $request->tanggal_awal . ' 00:00:00',
                $request->tanggal_akhir . ' 23:59:59'
            ]);
        }

        $pesan = $query->paginate(10)->withQueryString();
        return view('admin/pesanan/pesanan', [
            'pesan' => $pesan
        ]);
        //
    }
    public function detail($id)
    {
        $beli = Pesanan::findOrFail($id);
        // dd($beli);
        $keranjang = Detail::where('pesanan_id', $id)->get();
        return view('admin/pesanan/detail', [
            'pesan' => $keranjang,
            'beli' => $beli
        ]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function kirim($id)
    {
        $item = Pesanan::find($id);

        if ($item) {
            $item->status = "dikirim";
            $item->save();
        }

        return back()->with('success', 'Produk Dikirim');
        //
    }
    public function selesai($id)
    {
        $item = Pesanan::find($id);

        if ($item) {
            $item->status = "selesai";
            $item->save();
        }

        return redirect('/profil')->with('success', 'Produk Dikirim');
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produk = User::findOrFail($id);
        $produk->delete();

        return back()->with('success', 'Produk berhasil dihapus.');
        //
    }
}
