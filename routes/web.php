<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman utama / Informasi Anemia
Route::get('/', function () {
    return view('home');
})->name('home');


// Halaman Tentang Sistem
Route::get('/tentang-sistem', function () {
    return view('tentang-sistem');
})->name('tentang.sistem');


// Halaman Skrining Anemia
Route::get('/skrining', function () {
    return view('skrining');
})->name('skrining');


// Halaman Hasil Deteksi
Route::get('/hasil-deteksi', function () {
    return view('hasil-deteksi');
})->name('hasil.deteksi');