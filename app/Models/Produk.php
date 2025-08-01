<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'layout',
        'knob'
    ];
    // Produk.php
    public function varian()
    {
        return $this->hasMany(Varian::class);
    }

    public function fitur()
    {
        return $this->hasMany(Fitur::class); // pivot table
    }

    public function favorit()
    {
        return $this->hasMany(Favorit::class);
    }
}
