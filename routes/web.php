<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BukuController;

Route::get('/', [HomeController::class, 'index'])
    ->name('beranda');

Route::get('/tentang', [HomeController::class, 'tentang'])
    ->name('tentang');

Route::get('/buku', [BukuController::class, 'index'])
    ->name('buku.index');

Route::get('/kategori', [BukuController::class, 'kategori'])
    ->name('buku.kategori');

Route::get('/buku/{id}', [BukuController::class, 'show'])
    ->whereNumber('id')
    ->name('buku.detail');