<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeControllerPeserta;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\KategoriBeritaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TagBeritaController;
use App\Models\KategoriBerita;
use App\Models\TagBerita;
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

// Route::get('/', function () {
//     echo "Hallo gaes";
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/informasi', [InformationController::class, 'index']);
Route::get('/peserta', [HomeControllerPeserta::class, 'index']);

Route::prefix('admin')->group(function() {
    // Tag Berita
    Route::get('/tag_berita', [TagBeritaController::class, 'index'])->name('tag_berita.index');
    Route::get('/tag_berita/tambah', [TagBeritaController::class, 'create'])->name('tag_berita.create');
    Route::post('/tag_berita', [TagBeritaController::class, 'store'])->name('tag_berita.store');
    Route::get('/tag_berita/{tag_berita}/edit', [TagBeritaController::class, 'edit'])->name('tag_berita.edit');
    Route::put('/tag_berita/{tag_berita}', [TagBeritaController::class, 'update'])->name('tag_berita.update');
    Route::delete('/tag_berita/{tag_berita}', [TagBeritaController::class, 'destroy'])->name('tag_berita.destroy');

    // Tag Berita
    //berita
    Route::get('/berita',[BeritaController::class,'index']);
    Route::post('/berita',[BeritaController::class,'store']);
    Route::get('/berita/tambah',[BeritaController::class,'create']);
    Route::get('/berita/{id}/edit',[BeritaController::class,'edit']);
    Route::put('/berita/{id}/update',[BeritaController::class,'update']);
    Route::delete('/berita/{id}/hapus',[BeritaController::class,'destroy']);

    //kategori berita
    Route::get('/kategori_berita',[KategoriBeritaController::class,'index'])->name('kategori_berita');
    Route::post('/kategori_berita',[KategoriBeritaController::class,'store']);
    Route::get('/kategori_berita/tambah',[KategoriBeritaController::class,'create']);
    Route::get('/kategori_berita/{id}/edit',[KategoriBeritaController::class,'edit']);
    Route::put('/kategori_berita/{id}/update',[KategoriBeritaController::class,'update']);
    Route::delete('/kategori_berita/{id}/hapus',[KategoriBeritaController::class,'destroy']);
});
