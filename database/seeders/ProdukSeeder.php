<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Headman;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::truncate();
        $data = [
            [
                'nama' => 'AULA-LEOBOG A75 Gasket Mechanical',
                'deskripsi' => 'Keyboard mechanical dengan desain gasket mount yang memberikan sensasi mengetik lembut dan stabil, cocok untuk gaming dan produktivitas.',
                'harga' => '2289000',
                'layout' => '75%',
                'knob' => '1'
            ],
            [
                'nama' => 'AULA-LEOBOG K81 Gasket Mechanical',
                'deskripsi' => 'keyboard mechanical layout dengan desain gasket mount yang menghadirkan pengalaman mengetik lebih halus dan senyap.',
                'harga' => '1095000',
                'layout' => '80%',
                'knob' => '1'
            ],
            [
                'nama' => 'AULA F3061 Wired Mechanical',
                'deskripsi' => 'Keyboard mechanical berdesain ringkas dengan koneksi kabel, ideal untuk pengguna yang membutuhkan setup minimalis dan respons cepat.',
                'harga' => '745000',
                'layout' => '60%',
                'knob' => '0'
            ],
            [
                'nama' => 'AULA WIN60HE Magnetic Switch',
                'deskripsi' => 'Keyboard dengan switch magnetik berpresisi tinggi dan fitur pengaturan aktuasi, memberikan pengalaman mengetik dan gaming yang sangat responsif.',
                'harga' => '479000',
                'layout' => '65%',
                'knob' => '0'
            ],
            [
                'nama' => 'AULA-LEOBOG AMG65 Gasket Mechanical',
                'deskripsi' => 'Keyboard mechanical layout dengan mounting gasket, menggabungkan kenyamanan mengetik dengan ukuran compact yang tetap fungsional.',
                'harga' => '1347000',
                'layout' => '60%',
                'knob' => '0'
            ],
            [
                'nama' => 'AULA F98 PRO Custom Mechanical',
                'deskripsi' => 'keyboard mechanical custom kelas menengah ke atas dengan desain gasket yang nyaman, layar & knob kontrol praktis, pilihan konektivitas fleksibel, serta estetika modern melalui keycaps dan RGB.',
                'harga' => '948000',
                'layout' => '95%',
                'knob' => '1'
            ],
            [
                'nama' => 'AULA F2088 Mechanical Wired',
                'deskripsi' => 'keyboard mechanical full-size dengan koneksi kabel yang stabil, dilengkapi numpad dan fitur RGB.',
                'harga' => '378000',
                'layout' => '100%',
                'knob' => '1'
            ],

        ];
        foreach ($data as $value) {
            Produk::insert([
                'nama' => $value['nama'],
                'deskripsi' => $value['deskripsi'],
                'harga' => $value['harga'],
                'layout' => $value['layout'],
            ]);
        }
    }
}
