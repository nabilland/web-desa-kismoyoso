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

// UMKM
Route::get('/jamu-gendong', function () {
    return view('umkm.jamu-gendong');
})->name('jamu-gendong');

// ABOUT DESA
Route::get('/visi-misi', function () {
    return view('about.visimisi');
})->name('visi-misi');

