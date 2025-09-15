<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/halo', function () {
    return 'Halo Dunia dari project-contoh!';
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/kontak',function(){
    return view('kontak');
});