<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TransaksiController;
use App\Models\kategori;
use App\Models\Kategori as ModelsKategori;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/tambahkategori', [KategoriController::class, 'tambahkategori'])->name('tambahkategori');
Route::post('/insertkategori', [KategoriController::class, 'insertkategori'])->name('insertkategori');
Route::get('/tampilkategori/{id}', [KategoriController::class, 'tampilkategori'])->name('tampilkategori');
Route::post('/updatekategori/{id}', [KategoriController::class, 'updatekategori'])->name('updatekategori');
Route::get('/delete/{id}', [KategoriController::class, 'delete'])->name('delete');

Route::get('/', [TransaksiController::class, 'index'])->name('transaksi');
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');
Route::get('/tambahtransaksi', [TransaksiController::class, 'tambahtransaksimasuk'])->name('tambahtransaksimasuk');
Route::post('/inserttransaksi', [TransaksiController::class, 'inserttransaksi'])->name('inserttransaksi');
Route::get('/tampiltransaksi/{id}', [TransaksiController::class, 'tampiltransaksi'])->name('tampiltransaksi');
Route::post('/updatetransaksi/{id}', [TransaksiController::class, 'updatetransaksi'])->name('updatetransaksi');
Route::get('/deletetransaksi/{id}', [TransaksiController::class, 'deletetransaksi'])->name('deletetransaksi');
