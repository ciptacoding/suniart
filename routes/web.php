<?php

use App\Models\Penyewaan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PelangganController;
use App\Http\Controllers\Admin\PenyewaanController;
use App\Http\Controllers\Admin\SejarahTariController;

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

// Router Guest
Route::get('/', [HomeController::class, 'index'])->name('customer.home');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('store.register');


// Router Customer
Route::middleware('auth')->group(function () {
   Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// Router Admin
Route::middleware(['admin', 'auth'])->group(function () {
   Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

   Route::get('/sejarah', [SejarahTariController::class, 'index'])->name('admin.sejarah');
   Route::get('/tambah-sejarah', [SejarahTariController::class, 'tambah'])->name('admin.tambah.sejarah');
   Route::post('/sejarah', [SejarahTariController::class, 'simpan'])->name('admin.simpan.sejarah');
   Route::get('/detail-sejarah/{id}', [SejarahTariController::class, 'detail'])->name('admin.detail.sejarah');
   Route::get('/edit-sejarah/{id}', [SejarahTariController::class, 'edit'])->name('admin.edit.sejarah');
   Route::put('/sejarah/{id}', [SejarahTariController::class, 'update'])->name('admin.update.sejarah');
   Route::delete('/sejarah/{id}', [SejarahTariController::class, 'delete'])->name('admin.delete.sejarah');

   Route::get('/pelanggan', [PelangganController::class, 'index'])->name('admin.pelanggan');
   Route::get('/pelanggan/{id}', [PelangganController::class, 'detail'])->name('admin.pelanggan.detail');
   Route::patch('/pelanggan-aktif/{id}', [PelangganController::class, 'aktif'])->name('admin.pelanggan.aktif');
   Route::patch('/pelanggan-nonaktif/{id}', [PelangganController::class, 'nonaktif'])->name('admin.pelanggan.nonaktif');
   Route::get('/cetak-pelanggan/{id}', [PelangganController::class, 'download'])->name('admin.pelanggan.download');

   Route::get('/kategori', [KategoriController::class, 'index'])->name('admin.kategori');
   Route::get('/tambah-kategori', [KategoriController::class, 'tambah'])->name('admin.kategori.tambah');
   Route::post('/kategori', [KategoriController::class, 'simpan'])->name('admin.kategori.simpan');
   Route::get('/detail-kategori/{id}', [KategoriController::class, 'detail'])->name('admin.kategori.detail');
   Route::get('/edit-kategori/{id}', [KategoriController::class, 'edit'])->name('admin.kategori.edit');
   Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('admin.kategori.update');
   Route::delete('/kategori/{id}', [KategoriController::class, 'delete'])->name('admin.kategori.delete');
   Route::get('/download-kategori/{id}', [KategoriController::class, 'download'])->name('admin.kategori.download');

   Route::get('/produk', [ProdukController::class, 'index'])->name('admin.produk');
   Route::get('/tambah-produk', [ProdukController::class, 'tambah'])->name('admin.produk.tambah');
   Route::post('/produk', [ProdukController::class, 'simpan'])->name('admin.produk.simpan');
   Route::get('/detail-produk/{id}', [ProdukController::class, 'detail'])->name('admin.produk.detail');
   Route::get('/edit-produk/{id}', [ProdukController::class, 'edit'])->name('admin.produk.edit');
   Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('admin.produk.update');
   Route::delete('/produk/{id}', [ProdukController::class, 'delete'])->name('admin.produk.delete');
   Route::get('/download-produk/{id}', [ProdukController::class, 'download'])->name('admin.produk.download');

   Route::get('/penyewaan', [PenyewaanController::class, 'index'])->name('admin.penyewaan');
   Route::get('/penyewaan/{id}', [PenyewaanController::class, 'detail'])->name('admin.penyewaan.detail');
});
