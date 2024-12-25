<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AdminController::class, 'login'])->name('login');
// Route::get('/login', function () {
//     return redirect('/login');
// });
Route::post('/login', [AdminController::class, 'authenticate']);
Route::post('/logout', [AdminController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return redirect('/admin/dashboard');
    });
    Route::get('/admin/dashboard', [AdminController::class, 'index']);
    Route::get('/admin/dashboard/edit-news/{id}', [AdminController::class, 'editNews']);
    Route::post('/admin/dashboard/update-news', [AdminController::class, 'updateNews']);
    Route::get('/admin/dashboard/delete-news/{id}', [AdminController::class, 'deleteNews']);
    Route::get('/admin/category', [AdminController::class, 'getCategory']);
    Route::get('/admin/dashboard/set-popular/{status}/{id}', [AdminController::class, 'setPopular']);
    Route::post('/admin/dashboard/create-news', [AdminController::class, 'createNews']);
});

Route::get('/', [UserController::class, 'index']);
Route::get('/detail/{id}', [UserController::class, 'getDetailById']);
// Route::get([UserController::class, 'isPopular']);
Route::get('/category', [UserController::class, 'getAllCategory']);
Route::get('/category/{category_id}', [UserController::class, 'getCategoryById']);
