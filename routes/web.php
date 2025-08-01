<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FavoritController;
use App\Http\Controllers\VarianController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RoleController;
use App\Models\Pesanan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/registrasi', [AuthController::class, 'regist']);
Route::post('/daftar', [AuthController::class, 'register'])->name('postRegistrasi');
Route::post('/login', [AuthController::class, 'create'])->name('postlogin');
Route::get('logout', [AuthController::class, 'logout'])->name('postlogout');
Route::post('/edit/{id}', [AuthController::class, 'store'])->name('auth.store');

//beranda
Route::get('/', function () {
    return view('beranda');
});
//sudah checkout
Route::get('/sudah', function () {
    return view('sudah');
});

//profil & detail pesanan
Route::get('/profil', [FavoritController::class, 'index'])->middleware('user');
Route::get('/Detail/{id}', [FavoritController::class, 'create'])->middleware('user');

//produk,  detail produk
Route::get('/produk', [VarianController::class, 'index']);
Route::get('/detailProduk/{id}', [VarianController::class, 'create']);
// simpan-tidak (fav) produk,
Route::get('/simpan/{id}', [VarianController::class, 'simpan']);
Route::get('/tidaksimpan/{id}', [VarianController::class, 'tidak']);
//tambah produk ke keranjang
Route::post('/keranjang/tambah', [KeranjangController::class, 'store'])->name('keranjang.store');

//tampilan keranjang
Route::get('/keranjang', [KeranjangController::class, 'index'])->middleware('user');
//tambah & kurang jumlah
Route::get('/kurangjmlh/{id}', [KeranjangController::class, 'kurang']);
Route::get('/tambahjmlh/{id}', [KeranjangController::class, 'tambah']);
//pilih & tidak produk utk checkout
Route::get('/tidak/{id}', [KeranjangController::class, 'tidak']);
Route::get('/iya/{id}', [KeranjangController::class, 'iya']);
//hapus produk
Route::get('/hapuskeranjang/{id}', [KeranjangController::class, 'destroy']);

//tampilan dan proses checkout
Route::get('/checkout', [PesananController::class, 'index'])->middleware('user');
Route::get('/pesan', [PesananController::class, 'checkout']);

//admin
Route::get('/admin/dashboard', [RoleController::class, 'index'])->middleware('user');

//produk
Route::get('/admin/produk', [RoleController::class, 'produk'])->middleware('user');
//tampilan & proses tambah produk
Route::get('/admin/tambah-produk', [ProdukController::class, 'tambah'])->middleware('user');
Route::post('/admin/tambah', [ProdukController::class, 'store']);
//tampilan & proses edit produk
Route::get('/admin/edit-produk/{id}', [ProdukController::class, 'editt'])->middleware('user');
Route::put('/admin/edit/{id}', [ProdukController::class, 'update']);
//proses edit produk
Route::delete('/admin/hapus/{id}', [ProdukController::class, 'destroy']);

//tampilan & proses hapus user
Route::get('/admin/pengguna', [RoleController::class, 'user'])->middleware('user');
Route::delete('/admin/hapuss/{id}', [RoleController::class, 'destroy']);

Route::get('/admin/pesanan', [RoleController::class, 'pesan'])->middleware('user');
Route::get('/kirim/{id}', [RoleController::class, 'kirim'])->middleware('user');
Route::get('/selesai/{id}', [RoleController::class, 'selesai'])->middleware('user');
Route::get('/admin/detail/{id}', [RoleController::class, 'detail'])->middleware('user');
