<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class PostController extends Controller
{
    Public function index() {
        return view('user.page.post');
    }
}

?>