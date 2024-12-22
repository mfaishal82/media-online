<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/category', [AdminController::class, 'getCategory']);
