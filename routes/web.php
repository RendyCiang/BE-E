<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('about');
});

Route::get('/layout', function () {
    return view('layout');
});

// Get Home Page
Route::get('/', [BookController::class, 'getHomePage'])->name('home');
Route::get('/home', [BookController::class, 'getHomePage']);

// Create
Route::get('/add-book', [BookController::class, 'getCreatePage'])->name('addBook');
Route::post('/add-book-post', [BookController::class, 'createBook']);

// Edit Book
Route::get('/edit-book/{id}', [BookController::class, 'getEditPage']);
Route::post('/update/{id}', [BookController::class, 'updateBook']);
Route::post('/delete/{id}', [BookController::class, 'deteleBook']);

// Review
Route::get('/create-review', [ReviewController::class, 'create']);
Route::get('/show-review', [ReviewController::class, 'index']);
Route::post('/post-review', [ReviewController::class, 'store']);