<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/innerpage', function () {
    return view('menu.innerpage');
});

Route::get('/details', function () {
    return view('menu.details');
});
