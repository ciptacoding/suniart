<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Customer\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('customer.home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
