<?php

namespace App\Http\Controllers;

use App\Models\subcategories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getSubcategories($categoryId)
    {
        $subCategories = subcategories::where('categories_id', $categoryId)->get();
        return response()->json($subCategories);
    }
}
