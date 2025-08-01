<?php

namespace Database\Seeders;

// use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\Hash;
// use App\Models\Headman;
use App\Models\Varian;

class VarianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Varian::truncate();
        $data = [
            [
                'produk_id' => '1',
                'warna' => 'Cream',
                'img' => 'a75-cream.png',
                'stok' => '4'
            ],
            [
                'produk_id' => '1',
                'warna' => 'Pink',
                'img' => 'a75-pink.png',
                'stok' => '8'
            ],
            [
                'produk_id' => '1',
                'warna' => 'Black',
                'img' => 'a75-black.png',
                'stok' => '9'
            ],
            [
                'produk_id' => '1',
                'warna' => 'Cream Blue',
                'img' => 'a75-blue.png',
                'stok' => '16'
            ],
            [
                'produk_id' => '2',
                'warna' => 'White Blue',
                'img' => 'k81-blue.png',
                'stok' => '16'
            ],
            [
                'produk_id' => '2',
                'warna' => 'Black Green',
                'img' => 'k81-black.png',
                'stok' => '18'
            ],
            [
                'produk_id' => '2',
                'warna' => 'Pink',
                'img' => 'k81-pink.png',
                'stok' => '19'
            ],
            [
                'produk_id' => '3',
                'warna' => 'Pink',
                'img' => 'f3061-pink.png',
                'stok' => '19'
            ],
            [
                'produk_id' => '3',
                'warna' => 'Black',
                'img' => 'f3061-black.png',
                'stok' => '19'
            ],
            [
                'produk_id' => '4',
                'warna' => 'Black',
                'img' => 'win60he-black.png',
                'stok' => '19'
            ],
            [
                'produk_id' => '4',
                'warna' => 'Black Red',
                'img' => 'win60he-red.png',
                'stok' => '19'
            ],
            [
                'produk_id' => '4',
                'warna' => 'White Blue',
                'img' => 'win60he-blue.png',
                'stok' => '19'
            ],
            [
                'produk_id' => '4',
                'warna' => 'Gray Yellow',
                'img' => 'win60he-gray.png',
                'stok' => '19'
            ],
            [
                'produk_id' => '5',
                'warna' => 'Gray Yellow',
                'img' => 'amg65-gray.png',
                'stok' => '19'
            ],
            [
                'produk_id' => '5',
                'warna' => 'Black Purple',
                'img' => 'amg65-black.png',
                'stok' => '19'
            ],
            [
                'produk_id' => '5',
                'warna' => 'Pink Blue',
                'img' => 'amg65-pink.png',
                'stok' => '19'
            ],
            [
                'produk_id' => '6',
                'warna' => 'Black Green',
                'img' => 'f98-green.png',
                'stok' => '19'
            ],
            [
                'produk_id' => '6',
                'warna' => 'Black Transparant',
                'img' => 'f98-black.png',
                'stok' => '19'
            ],
            [
                'produk_id' => '6',
                'warna' => 'Blue Orange',
                'img' => 'f98-blue.png',
                'stok' => '19'
            ],
            [
                'produk_id' => '6',
                'warna' => 'Gray Transparant',
                'img' => 'f98-gray.png',
                'stok' => '19'
            ],
            [
                'produk_id' => '6',
                'warna' => 'Cream',
                'img' => 'f98-cream.png',
                'stok' => '19'
            ],
            [
                'produk_id' => '7',
                'warna' => 'White Yellow',
                'img' => 'f2088-white.png',
                'stok' => '19'
            ],


        ];
        foreach ($data as $value) {
            Varian::insert([
                'produk_id' => $value['produk_id'],
                'warna' => $value['warna'],
                'img' => $value['img'],
                'stok' => $value['stok'],
            ]);
        }
    }
}
