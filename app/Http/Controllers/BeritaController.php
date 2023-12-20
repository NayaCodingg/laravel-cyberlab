<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class BeritaController extends Controller
{
    Public function index() {
        return view('user.page.berita');
    }
}

?>