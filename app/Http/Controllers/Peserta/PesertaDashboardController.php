<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PesertaDashboardController extends Controller
{
    public function index() {
        return view('peserta.home.index');
    }
}