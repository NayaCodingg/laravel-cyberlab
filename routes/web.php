<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;

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
//     return view('welcome');
// });

// HOME
Route::get('/home', [HomeController::class, 'index']);

//TENTANG
Route::resource('tentangs', TentangsController::class);

//BERITA
Route::get('/berita', [BeritaController::class, 'index']);

