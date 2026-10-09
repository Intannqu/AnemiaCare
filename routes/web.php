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

    $data = [
        'hasil' => request('hasil', 'tidak_anemia'),
        'nama' => request('nama', 'Nama Pasien'),
        'jenis_kelamin' => request('jenis_kelamin', 'Laki-laki'),
        'usia' => request('usia', 20),
        'tanggal_lahir' => request('tanggal_lahir', '24 September 2003'),

        'gejala' => [
            'kelemahan_kelelahan' => 'Tidak',
            'jantung_berdebar' => 'Ya',
            'sesak_nafas' => 'Tidak',
            'pucat' => 'Tidak',
            'pusing' => 'Tidak',
            'perubahan_warna_tinja' => 'Tidak',
            'hipotensi' => 'Tidak',
        ],
    ];

    return view('hasil-deteksi', compact('data'));

})->name('hasil.deteksi');

// =========================
// DASHBOARD ADMIN
// =========================

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
