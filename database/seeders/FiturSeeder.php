<?php

namespace Database\Seeders;

use App\Models\Fitur;
use Carbon\Carbon;
// use App\Models\Role;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FiturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fitur::truncate();
        $data = [
            [
                'produk_id' => '7',
                'nama' => 'Mode Wired',
            ],
            [
                'produk_id' => '7',
                'nama' => 'multi-function knob',
            ],
            [
                'produk_id' => '7',
                'nama' => 'Regional light mixing',
            ],
            [
                'produk_id' => '7',
                'nama' => '104keys',
            ],
            [
                'produk_id' => '7',
                'nama' => 'Suitable for gaming, esports, and office use',
            ],
            [
                'produk_id' => '6',
                'nama' => 'Wireless tri-mode: BT / 2.4G / Wired',
            ],
            [
                'produk_id' => '6',
                'nama' => 'Gasket structure',
            ],
            [
                'produk_id' => '6',
                'nama' => 'Fully hot-swappable keys',
            ],
            [
                'produk_id' => '6',
                'nama' => 'Suitable for gaming, esports, and office use',
            ],
            [
                'produk_id' => '3',
                'nama' => 'mode: Wired',
            ],
            [
                'produk_id' => '3',
                'nama' => 'Suitable for gaming, esports, and office use',
            ],
            [
                'produk_id' => '2',
                'nama' => 'Wireless tri-mode: BT / 2.4G / Wired',
            ],
            [
                'produk_id' => '2',
                'nama' => 'Gasket structure',
            ],
            [
                'produk_id' => '2',
                'nama' => 'Fully hot-swappable keys',
            ],
            [
                'produk_id' => '2',
                'nama' => 'Suitable for gaming, esports, and office use',
            ],
            [
                'produk_id' => '1',
                'nama' => 'Wireless tri-mode: BT / 2.4G / Wired',
            ],
            [
                'produk_id' => '1',
                'nama' => 'Gasket structure',
            ],
            [
                'produk_id' => '1',
                'nama' => 'Fully hot-swappable keys',
            ],
            [
                'produk_id' => '1',
                'nama' => 'Suitable for gaming, esports, and office use',
            ],
            [
                'produk_id' => '4',
                'nama' => 'Wired',
            ],
            [
                'produk_id' => '4',
                'nama' => 'Magnetic Switch Keyboard',
            ],
            [
                'produk_id' => '4',
                'nama' => 'Extreme Response',
            ],
            [
                'produk_id' => '5',
                'nama' => 'Wired',
            ],
            [
                'produk_id' => '5',
                'nama' => 'Magnetic Switch Keyboard',
            ],
            [
                'produk_id' => '5',
                'nama' => 'Extreme Response',
            ],
            [
                'produk_id' => '5',
                'nama' => 'Suitable for gaming',
            ],
        ];
        foreach ($data as $value) {
            Fitur::insert([
                'produk_id' => $value['produk_id'],
                'nama' => $value['nama'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
