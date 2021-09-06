<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExactSearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controller::class, 'index'])->name('welcome');

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('/search', function () {
    return view('search');
});

Route::get('exactsearch', [ExactSearchController::class, 'exactsearch'])->name('exactsearch');
