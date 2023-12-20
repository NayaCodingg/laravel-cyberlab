<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class HomeController extends Controller
{
    Public function index() {
        return view('user.page.home');
    }
}

?>