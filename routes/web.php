<?php

use App\Http\Controllers\categoriesController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/gif/{id}', [homeController::class, 'show'])->name('detail');
Route::get('/categories', [categoriesController::class, 'index'])->name('categories');