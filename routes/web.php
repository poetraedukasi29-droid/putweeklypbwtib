<?php

use Illuminate\Support\Facades\Route;
use App\Models\Berita;

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



Route::get('/berita', function () {
    return view('Berita', [
        "title" => "Berita",
        "beritas" => Berita::ambilberita(),
    ]);
});


Route::get('/berita/{slug}', function ($slug) {
    return view('beritatunggal',[
        "title" => Berita::getTitle($slug),
        "berita" => Berita::getBerita($slug)
    ]);
});
