<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login', [AdminController::class, 'login'])->name('login');
Route::post('/admin/login', [AdminController::class, 'authenticate']);
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return redirect('/admin/dashboard');
    });
    Route::get('/admin/dashboard', [AdminController::class, 'index']);
    Route::get('/admin/category', [AdminController::class, 'getCategory']);
    Route::get('/admin/dashboard/set-popular/{status}/{id}', [AdminController::class, 'setPopular']);
});

Route::get('/', [UserController::class, 'index']);
Route::get('/detail/{id}', [UserController::class, 'getDetailById']);
// Route::get([UserController::class, 'isPopular']);
Route::get('/category', [UserController::class, 'getCategory']);
Route::get('/category/{category_id}', [UserController::class, 'getCategoryById']);
