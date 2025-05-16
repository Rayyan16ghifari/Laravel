<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Genre routes
Route::get('/genres', [GenreController::class, 'index']);

// Author routes
Route::get('/authors', [AuthorController::class, 'index']);

// Book routes (CRUD lengkap)
Route::resource('books', BookController::class);
