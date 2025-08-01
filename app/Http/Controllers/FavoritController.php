<?php

namespace App\Http\Controllers;

use App\Models\Favorit;
use App\Models\Pesanan;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreFavoritRequest;
use App\Http\Requests\UpdateFavoritRequest;
use App\Models\Detail;
use App\Models\Keranjang;

class FavoritController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $fav = Favorit::where('user_id', Auth::id())->get();
        $beli = Pesanan::where('user_id', Auth::id())
            ->orderBy('tanggal', 'desc')
            ->get();

        $jumlahBeli = $beli->count();
        $jumlahFav = $fav->count();
        $jumlahKrnjng = Keranjang::where('user_id', Auth::id())->count();
        $total = $beli->sum('total');

        return view('profil', [
            'fav' => $fav,
            'user' => $user,
            'beli' => $beli,
            'buy' => $jumlahBeli,
            'simpan' => $jumlahFav,
            'cart' => $jumlahKrnjng,
            'total' => $total
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $beli = Pesanan::findOrFail($id);
        // dd($beli);
        $keranjang = Detail::where('pesanan_id', $id)->get();
        return view('detail', [
            'pesan' => $keranjang,
            'beli' => $beli
        ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFavoritRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Favorit $favorit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favorit $favorit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFavoritRequest $request, Favorit $favorit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favorit $favorit)
    {
        //
    }
}
