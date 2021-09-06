<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [Controller::class, 'index'])->name('welcome');

Route::get('home', [HomeController::class, 'index'])->name('home');
