<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
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

// Admin
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'dashboard');
    Route::get('/admin/products',  'products');
    Route::get('/admin/products/{id}/edit',  'editProduct');
    Route::put('/admin/products/{id}',  'update');
    Route::delete('/admin/products/{id}',  'destroy');
    Route::get('/admin/products/create', 'create');
    Route::post('/admin/products/create', 'store');
});

Route::get('/admin/categories/{category}/subcategories', [CategoryController::class, 'getSubcategories']);

// User Products pages
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
