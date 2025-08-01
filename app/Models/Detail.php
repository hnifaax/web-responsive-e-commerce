<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'pesanan_id',
        'varian_id',
        'jumlah',
        'sub_total',
    ];
    // DetailPesanan.php
    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }

    public function varian()
    {
        return $this->belongsTo(Varian::class);
    }
}
