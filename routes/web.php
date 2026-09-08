<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return 'Muhammad Arief Andriansyah 24/545740/SV25748 Teknologi Rekayasa Perangkat Lunak Universitas Gadjah Mada';
});