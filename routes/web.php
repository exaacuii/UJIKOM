<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\produkcontroller;
use App\Http\Controllers\pelanggancontroller;


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

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', [LoginController::Class, 'login']);
Route::POST('/login', [LoginController::Class, 'proses_login']);


Route::get('/produk', [produkcontroller::Class, 'index']);
Route::get('/tambah_produk', [produkcontroller::Class, 'tambah_produk']);
Route::POST('/tambah_produk', [produkcontroller::class, 'proses_tambah_produk']);
Route::get('/hapus_produk/{id}', [produkcontroller::class, 'delete']);

Route::get('/pelanggan', [pelanggancontroller::Class, 'index']);
Route::get('/hapus_pelanggan/{id}', [pelanggancontroller::class, 'delete']);

