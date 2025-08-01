<?php

namespace App\Http\Controllers;

use App\Models\Fitur;
use App\Models\Produk;
use App\Models\Varian;
use App\Models\Favorit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreVarianRequest;
use App\Http\Requests\UpdateVarianRequest;

class VarianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->input('pencarian');
        $knob = $request->input('knob');
        $layout = $request->input('filter');

        $favorit = Favorit::where('user_id', Auth::id())->get()->keyBy('produk_id');


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
        $hasil = $varians->paginate(8);

        return view('daftar', [
            'varian' => $hasil,
            'fav' => $favorit
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $produk = Produk::with(['fitur', 'varian'])->findOrFail($id);
        $favorit = Favorit::where('user_id', Auth::id())->get()->keyBy('produk_id');

        return view('produk', [
            'produk' => $produk,
            'fav' => $favorit
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function simpan($id)
    {
        // Cek apakah sudah ada di favorit
        $sudahAda = Favorit::where('user_id', Auth::id())
            ->where('produk_id', $id)
            ->exists();

        if (!$sudahAda) {
            Favorit::create([
                'user_id' => Auth::id(),
                'produk_id' => $id
            ]);
        }

        return redirect()->back()->with('success', 'Produk disimpan ke favorit.');
        //
    }

    /**
     * Display the specified resource.
     */
    public function tidak($id)
    {
        Favorit::where('user_id', Auth::id())
            ->where('produk_id', $id)
            ->delete();

        return redirect()->back()->with('success', 'Produk dihapus dari favorit.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Varian $varian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVarianRequest $request, Varian $varian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Varian $varian)
    {
        //
    }
}
