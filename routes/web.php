<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\ProductsUserController;
use App\Http\Controllers\RegisterUserController;
use App\Models\categories;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    $categories = categories::with('products')->get();
    return view('home', ['categories' => $categories]);
});

Route::get('/{slug}', [ProductsUserController::class, 'index']);
Route::middleware('guest')->group(function () {
    Route::get('/user/register', [RegisterUserController::class, 'create']);
    Route::post('/user/register', [RegisterUserController::class, 'store']);
    Route::get('/user/login', [LoginUserController::class, 'create']);
    Route::post('/user/login', [LoginUserController::class, 'store']);
});
Route::delete('/logout', [LoginUserController::class, 'destroy']);


Route::get('/user/cart', [CartController::class, 'index']);
Route::patch('/updatequantity/{key}', [CartController::class, 'updateQuantity']);
Route::post('/addcart', [CartController::class, 'add']);
Route::post('/removecart/{key}', [CartController::class, 'delete']);
