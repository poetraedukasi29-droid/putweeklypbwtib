<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Putra Aditama",
        "nim"  => "13242520063",
        "prodi"=> "Teknologi Informasi",
        "gambar"=> "Naruto.jfif"
    ]);
});

Route::get('/kontak', function () {
    return view('Kontak', [
        "title" => "Kontak"
    ]);
});



Route::get('/berita', [BeritaController::class, 'tampilBerita']);
Route::get('/berita/{slug}', [BeritaController::class,'getBerita']);
