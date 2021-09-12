<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('search', [SearchController::class, 'list'])->name('search');

// add slug and name with 2 variables
Route::get('search', [SearchController::class, 'submitSearch'])->name('submitSearch');
