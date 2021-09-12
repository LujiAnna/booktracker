<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SearchController::class, 'index'])->name('search.index');
Route::get('/search/{id}', [SearchController::class, 'show'])->name('search.detail');

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
