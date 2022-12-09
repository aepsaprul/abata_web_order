<?php

use App\Http\Controllers\ProdukController;
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

Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/produk/{id}/detail', [ProdukController::class, 'detail'])->name('produk.detail');
Route::get('/produk/{id}/kategori', [ProdukController::class, 'kategori'])->name('produk.kategori');
Route::get('/transaksi/cart', [TransaksiController::class, 'cart'])->name('transaksi.cart');
