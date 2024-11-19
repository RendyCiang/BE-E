<?php

use Illuminate\Support\Facades\Route;

Route::get('/tutor', function () {
    return view('tutor');
});

Route::get('/', function () {
    return view('home');
});


// Route::get('/home', function () {
//     return view('welcome');
// });
