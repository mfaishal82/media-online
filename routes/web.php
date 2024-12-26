<?php

use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return redirect('/admin/login');
});
Route::get('/logout', function () {
    return redirect('/admin/login');
});
Route::get('/admin/login', [LoginController::class, 'login'])->name('login');
Route::post('/admin/login', [LoginController::class, 'authenticate']);
Route::post('/admin/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return redirect('/admin/dashboard');
    });
    Route::get('/admin/dashboard', [AdminNewsController::class, 'index']);
    Route::get('/admin/dashboard/edit-news/{id}', [AdminNewsController::class, 'editNews']);
    Route::post('/admin/dashboard/update-news/{id}', [AdminNewsController::class, 'updateNews']);
    Route::get('/admin/dashboard/delete-news/{id}', [AdminNewsController::class, 'deleteNews']);
    Route::get('/admin/dashboard/set-popular/{status}/{id}', [AdminNewsController::class, 'setPopular']);
    Route::post('/admin/dashboard/create-news', [AdminNewsController::class, 'createNews']);

    Route::get('/admin/category', [AdminCategoryController::class, 'getCategory']);
    Route::post('/admin/category/create-category', [AdminCategoryController::class, 'createCategory']);
    Route::get('/admin/category/delete-category/{id}', [AdminCategoryController::class, 'deleteCategory']);
});

Route::get('/', [FrontendController::class, 'index']);
Route::get('/search', [FrontendController::class, 'search']);
Route::get('/search-index', [FrontendController::class, 'searchIndex']);
Route::get('/about-us', [FrontendController::class, 'aboutUs']);
Route::get('/contact-us', [FrontendController::class, 'contactUs']);
Route::get('/index', [FrontendController::class, 'getTableIndex']);
Route::get('/detail/{id}', [FrontendController::class, 'getDetailById']);
Route::get('/category/{id}', [FrontendController::class, 'getCategoryById']);
