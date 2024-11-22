<?php

use App\Models\category;
use App\Models\products;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $category = category::with('products')->get();
    // dd($category);
    return view('index', ['category' => $category]);
});

Route::get('/iphone', function () {
    return view('iPhone');
});
