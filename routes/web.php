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

Route::get('/jamu-gendong', function () {
    return view('umkm.jamu-gendong');
})->name('jamu-gendong');

