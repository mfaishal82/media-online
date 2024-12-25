<?php

use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AdminNewsController::class, 'login'])->name('login');
// Route::get('/login', function () {
//     return redirect('/login');
// });
Route::post('/login', [AdminNewsController::class, 'authenticate']);
Route::post('/logout', [AdminNewsController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return redirect('/admin/dashboard');
    });
    Route::get('/admin/dashboard', [AdminNewsController::class, 'index']);
    Route::get('/admin/dashboard/edit-news/{id}', [AdminNewsController::class, 'editNews']);
    Route::post('/admin/dashboard/update-news', [AdminNewsController::class, 'updateNews']);
    Route::get('/admin/dashboard/delete-news/{id}', [AdminNewsController::class, 'deleteNews']);
    Route::get('/admin/dashboard/set-popular/{status}/{id}', [AdminNewsController::class, 'setPopular']);
    Route::post('/admin/dashboard/create-news', [AdminNewsController::class, 'createNews']);

    Route::get('/admin/category', [AdminCategoryController::class, 'getCategory']);
    Route::post('/admin/category/create-category', [AdminCategoryController::class, 'createCategory']);
    Route::get('/admin/category/delete-category/{id}', [AdminCategoryController::class, 'deleteCategory']);
});

Route::get('/', [UserController::class, 'index']);
Route::get('/detail/{id}', [UserController::class, 'getDetailById']);
Route::get('/category/{category_id}', [UserController::class, 'getCategoryById']);
