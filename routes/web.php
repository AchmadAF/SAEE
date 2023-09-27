<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtamaController;
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
    return view('beranda');
});
Route::get('/buku', [UtamaController::class,'buku']);
Route::get('/katalog', [UtamaController::class,'katalog']);
Route::get('/tentang-kami', [UtamaController::class,'tentangkami']);
Route::get('/kontak', [UtamaController::class,'kontak']);
Route::get('/marketplace', [UtamaController::class,'marketplace']);
Route::get('/company-profile', [UtamaController::class,'company']);
Route::get('/portofolio', [UtamaController::class,'portofolio']);
Route::get('/lowongan-pekerjaan', [UtamaController::class,'lowongan']);
Route::get('/sd', [UtamaController::class,'sd']);
Route::get('/smp', [UtamaController::class,'smp']);
Route::get('/sma', [UtamaController::class,'sma']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
