<?php

use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegisterUserController;
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

    $categoryName = '';
    $subcategories = [];
    if ($category) {
        $subcategories = subcategories::where('categories_id', $category->id)->get();
        $products = products::where('categories_id', $category->id)->get();
    } elseif ($subcategory) {
        $categoryName = categories::find($subcategory->categories_id);
        $products = products::where('subcategories_id', $subcategory->id)->get();
    } else {
        $products = "";
    }
    return view(
        'products',
        [
            'products' => $products,
            'category' => $category,
            'subcategories' => $subcategories,
            'subcategory' => $subcategory,
            'categoryName' => $categoryName
        ]
    );
    // dd($name);
});


Route::middleware('guest')->group(function () {
    Route::get('/user/register', [RegisterUserController::class, 'create']);
    Route::post('/user/register', [RegisterUserController::class, 'store']);
    Route::get('/user/login', [LoginUserController::class, 'create']);
    Route::post('/user/login', [LoginUserController::class, 'store']);
});

Route::delete('/user/logout', [LoginUserController::class, 'destroy']);
