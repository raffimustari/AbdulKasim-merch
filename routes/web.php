<?php

use App\Http\Controllers\Usercontroller;
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

// Route::get('/', 'UserController@login')->name('login');
// Route::post('postlogin', 'UserController@postlogin')->name('postlogin');
Route::get('/', [Usercontroller::class,'login'])->name('login');
Route::post('/post-login', [Usercontroller::class,'postlogin'])->name('postlogin');
Route::get('/produk', [Usercontroller::class,'produk'])->name('produk');

Route::get('/detail/{produk}', [Usercontroller::class,'detail'])->name('detail');
Route::post('/payment/{produk}',  [Usercontroller::class,'payment'])->name('payment');

Route::post('/submit-payment/{produk}/jumlah/{jumlah}', [Usercontroller::class,'submitPayment'])->name('submit-payment');

Route::get('/registrasi',[Usercontroller::class,'registrasi'])->name('registrasi');
Route::post('/postregistrasi', [Usercontroller::class,'postregistrasi'])->name('postregistrasi');


Route::get('/keranjang',[Usercontroller::class,'keranjang'])->name('keranjang');
Route::get('/pembayaran',[Usercontroller::class,'pembayaran'])->name('pembayaran');

Route::put('/bayar',[Usercontroller::class,'bayar'])->name('bayar');

