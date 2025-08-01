<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'varian_id',
        'jumlah',
        'dipilih',
    ];
    // Keranjang.php
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function varian()
    {
        return $this->belongsTo(Varian::class);
    }
}
