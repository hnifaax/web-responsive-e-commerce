<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Http\Requests\StoreKeranjangRequest;
use App\Http\Requests\UpdateKeranjangRequest;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keranjang = Keranjang::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        return view('keranjang', [
            'keranjang' => $keranjang
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function kurang($id)
    {
        $item = Keranjang::find($id);

        if ($item && $item->jumlah > 1) {
            $item->jumlah -= 1;
            $item->save();
        }

        return back()->with('success', 'Jumlah berhasil dikurangi');
        //
    }
    /**
     * Show the form for creating a new resource.
     */
    public function tambah($id)
    {
        $item = Keranjang::find($id);

        if ($item) {
            $item->jumlah += 1;
            $item->save();
        }

        return back()->with('success', 'Jumlah berhasil ditambah');
        //
    }
    /**
     * Show the form for creating a new resource.
     */
    public function tidak($id)
    {
        $item = Keranjang::find($id);

        if ($item) {
            $item->dipilih = false;
            $item->save();
        }

        return back();
        //
    }
    /**
     * Show the form for creating a new resource.
     */
    public function iya($id)
    {
        $item = Keranjang::find($id);

        if ($item) {
            $item->dipilih = true;
            $item->save();
        }

        return back();
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:varians,id',
            'jumlah' => 'required|integer|min:1'
        ]);

        // Cek apakah user sudah punya produk varian yang sama di keranjang
        $keranjang = Keranjang::where('user_id', Auth::id())
            ->where('varian_id', $request->id)
            ->first();

        if ($keranjang) {
            // Kalau sudah ada, update jumlahnya
            $keranjang->jumlah += $request->jumlah;
            $keranjang->save();
        } else {
            // Kalau belum ada, buat baru
            Keranjang::create([
                'user_id' => Auth::id(),
                'varian_id' => $request->id,
                'jumlah' => $request->jumlah,
                'dipilih' => false, // default
            ]);
        }

        return redirect()->back()->with('success', 'Berhasil ditambahkan ke keranjang.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Keranjang $keranjang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Keranjang $keranjang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKeranjangRequest $request, Keranjang $keranjang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Keranjang::find($id);

        if ($item) {
            $item->delete();
            return back()->with('success', 'Item berhasil dihapus dari keranjang');
        }

        return back()->withErrors('Item tidak ditemukan');
    }
}
