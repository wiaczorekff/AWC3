<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;





Route::resource('/tags', TagController::class); 
Route::resource('/categories',  CategoryController::class);
route::resource('/posts', PostController::class);