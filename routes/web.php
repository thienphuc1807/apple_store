<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\OrdersController;
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

// Route::get('/user/orders', [OrdersController::class, 'index']);
Route::post('/user/orders', [OrdersController::class, 'store']);

Route::controller(CartController::class)->group(function () {
    Route::get('/user/cart', 'index');
    Route::post('/addcart', 'add');
    Route::patch('/updatequantity/{key}', 'updateQuantity');
    Route::delete('/removecart/{key}', 'delete');
});
