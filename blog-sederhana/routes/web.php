<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    $link=route('posts.index');
    return '<h1>Selamat datang di Blog Saya</h1><p>Silakan kunjungi <a href="' . $link . '">Daftar Artikel</a></p>';
});
Route::prefix('posts')->group(function(){
    Route::get('/', [PostController::class,'index'])->name('posts.index');
    Route::get('/{id}', [PostController::class,'detail'])->whereNumber('id')->name('posts.show');
});
