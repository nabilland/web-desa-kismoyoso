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

// KEGIATAN
Route::get('/kebun-gizi', function () {
    return view('kegiatan.index');
})->name('kebun-gizi');
Route::get('/kebun-gizi-lembayung', function () {
    return view('kegiatan.kebun-gizi-lembayung');
})->name('kebun-gizi-lembayung');
Route::get('/kebun-gizi-sawi', function () {
    return view('kegiatan.kebun-gizi-sawi');
})->name('kebun-gizi-sawi');
Route::get('/kebun-gizi-bayam', function () {
    return view('kegiatan.kebun-gizi-bayam');
})->name('kebun-gizi-bayam');
Route::get('/posyandu', function () {
    return view('kegiatan.posyandu');
})->name('posyandu');

// INFORMASI GEOGRAFIS
Route::get('/informasi-geografis', function () {
    return view('about.geografis');
})->name('informasi-geografis');

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
Route::get('/umkm/tahu', function () {
    return view('umkm.tahu');
})->name('tahu');
Route::get('/umkm/tauge', function () {
    return view('umkm.tauge');
})->name('tauge');

// BERITA
Route::get('/berita', function () {
    return view('berita');
})->name('berita');

// ABOUT DESA
Route::get('/tentang-desa/visi-misi', function () {
    return view('about.visimisi');
})->name('visi-misi');
Route::get('/tentang-desa/struktur-pemerintahan', function () {
    return view('about.struktur');
})->name('struktur');
Route::get('/tentang-desa/sejarah', function () {
    return view('about.sejarah');
})->name('sejarah');

// INFRASTRUKTUR
Route::get('/infrastrukur/radar-pesawat', function () {
    return view('infrastruktur.radar-pesawat');
})->name('radar-pesawat');