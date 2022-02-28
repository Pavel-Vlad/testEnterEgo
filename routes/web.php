<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Controller::class, 'showIndex']);
Route::get('/product/{id}', [ProductController::class, 'showProduct']);
Route::get('/category', [CategoryController::class, 'showCategories']);
Route::get('/category/{id}', [CategoryController::class, 'showProductsCategory']);
Route::get('/cart', [CartController::class, 'showCart']);
Route::get('/cart/{id}', [CartController::class, 'addToCart']);
