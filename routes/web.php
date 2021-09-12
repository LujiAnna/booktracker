<?php

use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SearchController::class, 'index'])->name('book.index');
Route::get('/books/{id}', [SearchController::class, 'show'])->name('book.detail');
