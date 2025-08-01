<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Varian extends Model
{
    use HasFactory;
    protected $fillable = [
        'warna',
        'img',
        'stok',
    ];
    // Varian.php
    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    public function gambar()
    {
        return $this->hasMany(Varian::class);
    }

    public function keranjang()
    {
        return $this->hasMany(Keranjang::class);
    }

    public function detailPesanan()
    {
        return $this->hasMany(Detail::class);
    }
}
