<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/innerpage', function () {
    return view('menu.innerpage');
});

Route::get('/details', function () {
    return view('menu.details');
});

// ARSIP
Route::get('/arsip', function () {
    return view('arsip.arsip');
});

// INFORMASI PENDUDUK
Route::get('/pekerjaan-penduduk', function () {
    return view('penduduk.pekerjaan');
})->name('pekerjaan-penduduk');
Route::get('/pendidikan-penduduk', function () {
    return view('penduduk.pendidikan');
})->name('pendidikan-penduduk');
Route::get('/komposisi-penduduk', function () {
    return view('penduduk.komposisi');
})->name('komposisi-penduduk');

// POTENSI
Route::get('/potensi', function () {
    return view('potensi.index');
})->name('potensi');
Route::get('/potensi/pertanian', function () {
    return view('potensi.pertanian');
})->name('potensi-pertanian');
Route::get('/potensi/perkebunan', function () {
    return view('potensi.perkebunan');
})->name('potensi-perkebunan');

// UMKM
Route::get('/#portfolio', function () {
})->name('umkm');
Route::get('/umkm/jamu-gendong', function () {
    return view('umkm.jamu-gendong');
})->name('jamu-gendong');

// ABOUT DESA
Route::get('/tentang-desa/visi-misi', function () {
    return view('about.visimisi');
})->name('visi-misi');
Route::get('/tentang-desa/struktur-pemerintahan', function () {
    return view('about.struktur');
})->name('struktur');
