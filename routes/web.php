<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'authenticate']);
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/category', [AdminController::class, 'getCategory']);
});

Route::get('/', [UserController::class, 'index']);
Route::get('/{id}', [UserController::class, 'getById']);
Route::get('/category', [UserController::class, 'getCategory']);
Route::get('/category/{id}', [UserController::class, 'getCategoryById']);
