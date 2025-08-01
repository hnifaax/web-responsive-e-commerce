<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitur extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'produk_id',
        'nama'
    ];
    // Fitur.php
    public function produk()
    {
        return $this->belongsToMany(Produk::class, 'produk_fitur'); // pivot
    }
}
