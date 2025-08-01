<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Headman;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $data = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'alamat' => 'Surabaya',
                'nomor' => '08123009876',
                'img' => 'admin.png',
                'role_id' => '1'
            ],
            [
                'name' => 'Hanifa Jauza Apsari',
                'email' => 'panitia@gmail.com',
                'password' => Hash::make('hanifa'),
                'alamat' => 'Surabaya',
                'nomor' => '08123009856',
                'img' => 'admin-2.png',
                'role_id' => '2'
            ]
        ];
        foreach ($data as $value) {
            User::insert([
                'name' => $value['name'],
                'email' => $value['email'],
                'password' => $value['password'],
                'alamat' => $value['alamat'],
                'nomor' => $value['nomor'],
                'img' => $value['img'],
                'role_id' => $value['role_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
