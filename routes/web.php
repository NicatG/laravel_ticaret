<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BasketController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomePageController::class,'index'])->name('index');
Route::get('/category/{slug_categoryname}',[CategoryController::class,'index'])->name('category');

Route::get('/product/{slug_productname}',[ProductController::class,'index'])->name('product');

Route::get('basket',[BasketController::class,'index'])->name('basket');