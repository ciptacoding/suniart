<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Admin\SejarahTariController;
use Illuminate\Support\Facades\Route;

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
});
