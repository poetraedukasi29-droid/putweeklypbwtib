<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('Profile');
});

Route::get('/kontak', function () {
    return view('Kontak');
});

Route::get('/berita', function () {
    return view('Berita');
});
