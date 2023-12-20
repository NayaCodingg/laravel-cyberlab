<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class KontakController extends Controller
{
    Public function index() {
        return view('user.page.kontak');
    }
}
?>