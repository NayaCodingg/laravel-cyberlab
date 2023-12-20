<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class TentangController extends Controller
{
    Public function index() {
        return view('user.page.tentang');
    }
}

?>