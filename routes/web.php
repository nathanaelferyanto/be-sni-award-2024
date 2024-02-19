<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\LoginController;
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

Route::get('', [HomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/informasi', [InformationController::class, 'index']);

