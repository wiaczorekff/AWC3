<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});
route::get("/about",[AboutController::class, 'index']);
route::get('/posts', [PostController::class, 'index'])->name('posts.index');
route::get('posts/create',[PostController::class, 'create'])->name('posts.create');
route::post('/posts',[PostController::class, 'store'])->name('posts.store');