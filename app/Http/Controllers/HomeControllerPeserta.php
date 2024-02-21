<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControllerPeserta extends Controller
{
    public function index() {
        return view('peserta.home.index');
    }
}
