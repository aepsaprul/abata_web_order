<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register/store', [RegisterController::class, 'store'])->name('register.store');

Route::get('login', [LoginController::class, 'form'])->name('login');
Route::post('login/auth', [LoginController::class, 'authenticate'])->name('login.auth');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/produk/{id}/detail', [ProdukController::class, 'detail'])->name('produk.detail');
Route::get('/produk/{id}/kategori', [ProdukController::class, 'kategori'])->name('produk.kategori');
Route::get('/transaksi/cart', [TransaksiController::class, 'cart'])->name('transaksi.cart');
Route::get('/transaksi/checkout', [TransaksiController::class, 'checkout'])->name('transaksi.checkout');
Route::get('/transaksi/invoice', [TransaksiController::class, 'invoice'])->name('transaksi.invoice');
