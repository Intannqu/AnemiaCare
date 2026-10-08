<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


// =========================
// INFORMASI ANEMIA / HOME
// =========================

Route::get('/', function () {
    return view('home');
})->name('home');


// =========================
// TENTANG SISTEM
// =========================

Route::get('/tentang-sistem', function () {
    return view('tentang-sistem');
})->name('tentang.sistem');


// =========================
// SKRINING ANEMIA
// =========================

Route::get('/skrining', function () {
    return view('skrining');
})->name('skrining');


// =========================
// HASIL DETEKSI
// =========================

Route::get('/hasil-deteksi', function () {
    return view('hasil-deteksi');
})->name('hasil.deteksi');