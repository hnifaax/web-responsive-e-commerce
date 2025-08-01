<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Keranjang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePesananRequest;
use App\Http\Requests\UpdatePesananRequest;
use App\Models\Detail;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keranjang = Keranjang::where('user_id', Auth::id())->where('dipilih', true)->get();
        return view('checkout', [
            'pesan' => $keranjang
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function checkout()
    {
        $userId = Auth::id();

        $keranjangItems = Keranjang::with('varian.produk')
            ->where('user_id', $userId)
            ->where('dipilih', true)
            ->get();
        // dd($keranjangItems);
        // if ($keranjangItems->isEmpty()) {
        //     return redirect()->back()->with('error', 'Tidak ada produk yang dipilih.');
        // }
        $totalSemua = 0;
        $pesanan = Pesanan::create([
            'user_id' => $userId,
            'tanggal' => now(),
            'status' => 'disiapkan',
            'total' => 0, // default dulu
        ]);
        foreach ($keranjangItems as $item) {
            $harga = $item->varian->produk->harga ?? 0;
            $jumlah = $item->jumlah;
            $subTotal = $harga * $jumlah;

            // Tambahkan ke total semua
            $totalSemua += $subTotal;
            Detail::create([
                'pesanan_id' => $pesanan->id,
                'varian_id' => $item->varian_id,
                'jumlah' => $jumlah,
                'harga' => $harga,
                'sub_total' => $harga * $jumlah,
            ]);
            $varian = $item->varian;
            $varian->stok -= $jumlah;
            $varian->save();
        }

        $totalSemua += 28000;
        // dd($hasil);
        $pesanan->update([
            'total' => $totalSemua + 28000,
        ]);
        // $varian->stok >= $jumlah;
        $pesanan->total = $totalSemua;
        $pesanan->save();
        Keranjang::where('user_id', $userId)->where('dipilih', true)->delete();
        return view('/sudah');

        // DB::beginTransaction();

        // try {
        //     // Buat dulu pesanan kosong
        //     $pesanan = Pesanan::create([
        //         'user_id' => $userId,
        //         'tanggal' => now(),
        //         'status' => 'disiapkan',
        //         'total' => 0, // default dulu
        //     ]);
        //     dd($pesanan);

        //     $totalSemua = 0;

        //     foreach ($keranjangItems as $item) {
        //         $harga = $item->varian->harga ?? 0;
        //         $jumlah = $item->jumlah;
        //         $subTotal = $harga * $jumlah;

        //         // Tambahkan ke total semua
        //         $totalSemua += $subTotal;

        //         Detail::create([
        //             'pesanan_id' => $pesanan->id,
        //             'varian_id' => $item->varian_id,
        //             'jumlah' => $jumlah,
        //             'harga' => $harga,
        //             'sub_total' => $subTotal,
        //         ]);
        //     }

        //     // Update total pesanan
        //     $pesanan->update([
        //         'total' => $totalSemua
        //     ]);

        //     // Bersihkan keranjang
        //     Keranjang::where('user_id', $userId)->where('dipilih', true)->delete();

        //     DB::commit();

        //     return view('/sudah');
        // } catch (\Exception $e) {
        //     DB::rollBack();
        //     return redirect()->back()->with('error', 'Terjadi kesalahan saat proses checkout.');
        // }
        //
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePesananRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pesanan $pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePesananRequest $request, Pesanan $pesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pesanan $pesanan)
    {
        //
    }
}
