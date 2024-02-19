<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\TagController;
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

Route::get('/', function () {
    return view('welcome');
});
//berita
Route::get('/berita',[\App\Http\Controllers\BeritaController::class,'index']);
Route::post('/berita',[\App\Http\Controllers\BeritaController::class,'store']);
Route::get('/berita/create',[\App\Http\Controllers\BeritaController::class,'create']);
Route::get('/berita/{id}/edit',[\App\Http\Controllers\BeritaController::class,'edit']);
Route::put('/berita/{id}/edit',[\App\Http\Controllers\BeritaController::class,'update']);
Route::delete('/berita/{id}/edit',[\App\Http\Controllers\BeritaController::class,'destroy']);
//kategori berita
Route::get('/kategori_berita',[\App\Http\Controllers\KategoriBeritaController::class,'index']);
Route::post('/kategori_berita',[\App\Http\Controllers\KategoriBeritaController::class,'store']);
Route::get('/kategori_berita/create',[\App\Http\Controllers\KategoriBeritaController::class,'create']);

