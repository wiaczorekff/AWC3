<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;
use App\Http\Controllers\authorController;






Route::resource('/books', bookController::class); 
Route::resource('/authors',  authorController::class);
