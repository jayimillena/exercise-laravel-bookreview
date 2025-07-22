<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ 
    BookController, ReviewController 
};

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController::class);
Route::resource('review', ReviewController::class);