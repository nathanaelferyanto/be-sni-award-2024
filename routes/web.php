<?php

use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeControllerPeserta;
use App\Http\Controllers\HomePesertaController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\KategoriBeritaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilPesertaController;
use App\Http\Controllers\RiwayatPesertaController;
use App\Http\Controllers\TagBeritaController;
use App\Models\KategoriBerita;
use App\Models\TagBerita;
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

// Route::get('/', function () {
//     echo "Hallo gaes";
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/informasi', [InformationController::class, 'index']);
Route::get('/admin', [HomeAdminController::class, 'index']);
Route::get('/peserta',[HomePesertaController::class, 'index']);
Route::get('/peserta/profil',[ProfilPesertaController::class, 'index']);
Route::get('/peserta/riwayat', [RiwayatPesertaController::class, 'index']);

Route::prefix('admin')->group(function() {

    // Tag Berita
    Route::get('/tag_berita', [TagBeritaController::class, 'index'])->name('tag_berita.index');
    Route::get('/tag_berita/tambah', [TagBeritaController::class, 'create'])->name('tag_berita.create');
    Route::post('/tag_berita', [TagBeritaController::class, 'store'])->name('tag_berita.store');
    Route::get('/tag_berita/{tag_berita}/edit', [TagBeritaController::class, 'edit'])->name('tag_berita.edit');
    Route::put('/tag_berita/{tag_berita}', [TagBeritaController::class, 'update'])->name('tag_berita.update');
    Route::delete('/tag_berita/{tag_berita}', [TagBeritaController::class, 'destroy'])->name('tag_berita.destroy');

    //berita
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('/berita/tambah', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/berita/{berita}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{berita}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/berita/{berita}', [BeritaController::class, 'destroy'])->name('berita.destroy');

    //kategori berita
    Route::get('/kategori_berita',[KategoriBeritaController::class,'index'])->name('kategori_berita.index');
    Route::get('/kategori_berita/tambah',[KategoriBeritaController::class,'create'])->name('kategori_berita.create');
    Route::post('/kategori_berita',[KategoriBeritaController::class,'store'])->name('kategori_berita.store');
    Route::get('/kategori_berita/{kategori_berita}/edit',[KategoriBeritaController::class,'edit'])->name('kategori_berita.edit');
    Route::put('/kategori_berita/{kategori_berita}',[KategoriBeritaController::class,'update'])->name('kategori_berita.update');
    Route::delete('/kategori_berita/{kategori_berita}',[KategoriBeritaController::class,'destroy'])->name('kategori_berita.destroy');

    //berita
    Route::get('/dokumen', [DokumenController::class, 'index'])->name('dokumen.index');
    Route::get('/dokumen/tambah', [DokumenController::class, 'create'])->name('dokumen.create');
    Route::post('/dokumen', [DokumenController::class, 'store'])->name('dokumen.store');
    Route::get('/dokumen/{dokumen}/edit', [DokumenController::class, 'edit'])->name('dokumen.edit');
    Route::put('/dokumen/{dokumen}', [DokumenController::class, 'update'])->name('dokumen.update');
    Route::delete('/dokumen/{dokumen}', [DokumenController::class, 'destroy'])->name('dokumen.destroy');
});
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

// assessment kategori
Route::get('/assessment_kategori', [App\Http\Controllers\AssessmentKategoriController::class,'index'])->name('ass_kategori.index');
Route::get('/assessment_kategori/tambah', [App\Http\Controllers\AssessmentKategoriController::class,'create']);
Route::post('/assessment_kategori',[App\Http\Controllers\AssessmentKategoriController::class,'store']);
Route::get('/assessment_kategori/{id}/ubah',[App\Http\Controllers\AssessmentKategoriController::class,'edit']);
Route::put('/assessment_kategori/{id}',[App\Http\Controllers\AssessmentKategoriController::class,'update']);
Route::delete('/assessment_kategori/{id}',[App\Http\Controllers\AssessmentKategoriController::class,'destroy']);

// assessment sub kategori
Route::get('/assessment_sub_kategori', [App\Http\Controllers\AssessmentSubKategoriController::class,'index']);
Route::get('/assessment_sub_kategori/tambah', [App\Http\Controllers\AssessmentSubKategoriController::class,'create']);
Route::post('/assessment_sub_kategori',[App\Http\Controllers\AssessmentSubKategoriController::class,'store']);
Route::get('/assessment_sub_kategori/{id}/ubah',[App\Http\Controllers\AssessmentSubKategoriController::class,'edit']);
Route::put('/assessment_sub_kategori/{id}',[App\Http\Controllers\AssessmentSubKategoriController::class,'update']);
Route::delete('/assessment_sub_kategori/{id}',[App\Http\Controllers\AssessmentSubKategoriController::class,'destroy']);

// status kepemilikan
Route::get('/admin/status_kepemilikan', [App\Http\Controllers\StatusKepemilikanController::class,'index']);
Route::get('/admin/status_kepemilikan/tambah', [App\Http\Controllers\StatusKepemilikanController::class,'create']);
Route::post('/admin/status_kepemilikan',[App\Http\Controllers\StatusKepemilikanController::class,'store']);
Route::get('/admin/status_kepemilikan/{id}/ubah',[App\Http\Controllers\StatusKepemilikanController::class,'edit']);
Route::put('/admin/status_kepemilikan/{id}',[App\Http\Controllers\StatusKepemilikanController::class,'update']);
Route::delete('/admin/status_kepemilikan/{id}',[App\Http\Controllers\StatusKepemilikanController::class,'destroy']);