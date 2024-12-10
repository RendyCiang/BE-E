<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/about', function () {
    return view('about');
});

Route::get('/layout', function () {
    return view('layout');
});

// Route::get('/add-book', function () {
//     return view('createBook');
// });
Route::get('/', [BookController::class, 'getHomePage']);
Route::get('/add-book', [BookController::class, 'getCreatePage']);
Route::post('/add-book-post', [BookController::class, 'createBook']);