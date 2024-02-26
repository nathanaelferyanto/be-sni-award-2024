<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeControllerPeserta;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\KategoriBeritaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Peserta\AuthPesertaController;
use App\Http\Controllers\Peserta\PesertaDashboardController;
use Illuminate\Support\Facades\Auth;
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

Route::middleware(['guest'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    // Route::get('/login', [LoginController::class, 'index']);
    Route::get('/informasi', [InformationController::class, 'index']);
    Route::get('/peserta', [HomeControllerPeserta::class, 'index']);

    // Auth
    //peserta
    Route::get('/masuk', [AuthPesertaController::class, 'loginPesertaView']);
    Route::post('/masuk', [AuthPesertaController::class, 'loginPeserta']);
    Route::get('/registrasi', [AuthPesertaController::class, 'registrasiPesertaView']);
    Route::post('/registrasi', [AuthPesertaController::class, 'registrasiPeserta']);
    Route::get('/verifikasi/{verify_key}', [AuthPesertaController::class, 'verifikasiPeserta']);
    //end Auth
});

Route::middleware(['auth'])->group(function () {
    //Auth
    Route::post('/keluar', [AuthPesertaController::class, 'logoutPeserta']);
    //end Auth

});

Route::get('/dashboard', [PesertaDashboardController::class, 'index']);
//berita
Route::get('/berita',[BeritaController::class,'index']);
Route::post('/berita',[BeritaController::class,'store']);
Route::get('/berita/tambah',[BeritaController::class,'create']);
Route::get('/berita/{id}/edit',[BeritaController::class,'edit']);
Route::put('/berita/{id}/edit',[BeritaController::class,'update']);
Route::delete('/berita/{id}/edit',[BeritaController::class,'destroy']);
//kategori berita
Route::get('/kategori_berita',[KategoriBeritaController::class,'index']);
Route::post('/kategori_berita',[KategoriBeritaController::class,'store']);
Route::get('/kategori_berita/tambah',[KategoriBeritaController::class,'create']);