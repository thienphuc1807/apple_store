<?php

use App\Models\categories;
use App\Models\products;
use App\Models\subcategories;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $categories = categories::with('products')->get();
    // dd($categories);
    return view('index', ['categories' => $categories]);
});

Route::get('/{name}', function ($name) {
    $category = categories::where('name', $name)->first();
    $subcategory = subcategories::where('name', $name)->first();
    $subcategories = [];
    if ($category) {
        $subcategories = subcategories::where('categories_id', $category->id)->get();
        $products = products::where('categories_id', $category->id)->get();
    } else {
        $products = products::where('subcategories_id', $subcategory->id)->get();
    }
    return view('products', ['products' => $products, 'category' => $category, 'subcategories' => $subcategories, 'subcategory' => $subcategory]);
    // dd($name);
});
