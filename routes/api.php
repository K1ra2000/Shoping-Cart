<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('products/',[App\Http\Controllers\ProductsController::class, 'index'])->name('products');
Route::get('product-detail/{id}',[App\Http\Controllers\ProductsController::class, 'show']);
Route::get('cart/',[App\Http\Controllers\ProductsController::class, 'cart']);
Route::get('add-to-cart/{id}',[App\Http\Controllers\ProductsController::class, 'addToCart']);
Route::get('destroy/{id}',[App\Http\Controllers\ProductsController::class, 'Destroy']);




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'show'])->name('home');

