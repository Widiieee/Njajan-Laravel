<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/struktur', function () {
    return view('struktur');
});

Route::get('/kontak', function () {
    return view('kontak');
});
