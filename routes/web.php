<?php

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

Route::get('/', function () {
    return view('welcome');
});




Route::get('products/',[App\Http\Controllers\ProductsController::class, 'index'])->name('products');
Route::get('product-detail/{id}',[App\Http\Controllers\ProductsController::class, 'show']);
Route::get('cart/',[App\Http\Controllers\ProductsController::class, 'cart']);
Route::get('add-to-cart/{id}',[App\Http\Controllers\ProductsController::class, 'addToCart']);
Route::get('destroy/{id}',[App\Http\Controllers\ProductsController::class, 'Destroy']);




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'show'])->name('home');

