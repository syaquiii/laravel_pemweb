<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // Pastikan mengimpor ProductController

Route::get('/', function () {
    return view('welcome');
});



Route::resource('products', ProductController::class);