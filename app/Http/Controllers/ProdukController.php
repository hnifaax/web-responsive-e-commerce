<?php

namespace App\Http\Controllers;

use App\Models\Fitur;
use App\Models\Produk;
use App\Models\Varian;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tambah()
    {
        return view('/admin/produk/tambah');
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function editt($id)
    {
        $produk = Produk::with(['varian', 'fitur'])->findOrFail($id);

        return view('/admin/produk/edit', [
            'produk' => $produk
        ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|integer',
            'varian.*.warna' => 'required',
            'varian.*.img' => 'required|image',
            'varian.*.stok' => 'required|integer',
            'fitur.*' => 'required|string'
        ]);


        $produk = Produk::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'layout' => $request->layout,
            'knob' => $request->has('knob') ? 1 : 0,
        ]);

        foreach ($request->varian as $index => $item) {
            //  if ($request->file('img')) {
            $file = $request->file("varian.$index.img");

            if ($file) {
                $nama_gambar = time() . '_' . $index . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('img/produk'), $nama_gambar);
            } else {
                $nama_gambar = null;
            }
            // dd($request->file("varian.$index.img"));
            # code...
            // $nama_gambar = time() . '.' . $request->img->extension();
            // $request->img->move(public_path('img/produk'), $nama_gambar);
            // $user->img = $nama_gambar;

            // $imagePath = $request->file("$index.img")->store('varian');

            $produk->varian()->create([
                'warna' => $item['warna'],
                'img' => $nama_gambar,
                'stok' => $item['stok']
            ]);
        }

        foreach ($request->fitur as $fitur) {
            $produk->fitur()->create(['nama' => $fitur]);
        }

        return redirect('/admin/produk')->with('success', 'Produk berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {

        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'knob' => $request->knob,
            'layout' => $request->layout,
        ]);

        // Hapus fitur lama
        if ($request->has('delete_fitur')) {
            Fitur::destroy($request->delete_fitur);
        }

        // Update fitur lama
        if ($request->has('old_fitur')) {
            foreach ($request->old_fitur as $id => $data) {
                Fitur::where('id', $id)->update(['nama' => $data['nama']]);
            }
        }

        // Tambah fitur baru
        if ($request->has('fitur')) {
            foreach ($request->fitur as $nama) {
                $produk->fitur()->create(['nama' => $nama]);
            }
        }

        // Hapus varian lama
        if ($request->has('delete_varian')) {
            Varian::destroy($request->delete_varian);
        }

        // Update varian lama
        if ($request->has('old_varian')) {
            foreach ($request->old_varian as $id => $data) {
                $varian = Varian::findOrFail($id);

                $updateData = [
                    'warna' => $data['warna'],
                    'stok' => $data['stok'],
                ];

                // Ambil file dari input file
                $file = $request->file("old_varian.$id.img");
                if ($file) {
                    $nama_gambar = time() . "_edit_$id." . $file->getClientOriginalExtension();
                    $file->move(public_path('img/produk'), $nama_gambar);
                    $updateData['img'] = $nama_gambar;
                }

                $varian->update($updateData);
            }
        }


        // Tambah varian baru
        if ($request->has('varian')) {
            foreach ($request->varian as $index => $item) {
                $file = $request->file("varian.$index.img");

                if ($file) {
                    $nama_gambar = time() . '_' . $index . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('img/produk'), $nama_gambar);
                } else {
                    $nama_gambar = null;
                }

                $produk->varian()->create([
                    'warna' => $item['warna'],
                    'stok' => $item['stok'],
                    'img' => $nama_gambar,
                ]);
            }
        }


        return back()->with('success', 'Produk berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $produk = Produk::with('varian', 'fitur')->findOrFail($id);

        // Hapus gambar varian dari direktori
        foreach ($produk->varian as $varian) {
            $path = public_path('img/produk/' . $varian->img);
            if (File::exists($path)) {
                File::delete($path);
            }
        }

        // Hapus relasi dulu
        $produk->varian()->delete();
        $produk->fitur()->delete();

        // Terakhir hapus produk
        $produk->delete();

        return back()->with('success', 'Produk berhasil dihapus.');
    }
}
