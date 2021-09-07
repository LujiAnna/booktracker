<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controller::class, 'index'])->name('welcome');

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('search', [SearchController::class, 'show'])->name('search');

// Testing
// Route::get('/search', function () {
//     // die('Hello from Route');
// });

// add slug and name with 2 variables
// Route::get('search', [SearchController::class, 'submitSearch']);

