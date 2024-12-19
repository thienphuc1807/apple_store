<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\products;
use App\Models\subcategories;
use Illuminate\Http\Request;

class ProductsUserController extends Controller
{
    public function index($slug)
    {
        $category = categories::where('slug', $slug)->first();
        $subcategory = subcategories::where('slug', $slug)->first();
        $productDetails = products::where('slug', $slug)->first();

        // Initialize variables
        $subcategories = collect();
        $products = collect();

        if ($category) {
            // If category is found, fetch related subcategories and products
            $subcategories = subcategories::where('categories_id', $category->id)->get();
            $products = products::where('categories_id', $category->id)->get();
            return view(
                'products.index',
                [
                    'products' => $products,
                    'category' => $category,
                    'subcategories' => $subcategories,
                ]
            );
        } elseif ($subcategory) {
            // Fetch the parent category and products related to the subcategory
            $parentCategory = categories::find($subcategory->categories_id);
            $products = products::where('subcategories_id', $subcategory->id)->get();
            return view(
                'products.index',
                [
                    'products' => $products,
                    'parentCategory' => $parentCategory,
                    'subcategory' => $subcategory,
                ]
            );
        } elseif ($productDetails) {
            $parentCategory = categories::find($productDetails->categories_id);
            $subcategory = subcategories::find($productDetails->subcategories_id);
            $relatedProducts = products::where('subcategories_id', $productDetails->subcategories_id)
                ->where('id', '!=', $productDetails->id)
                ->get();
            return view(
                'products.show',
                [
                    'productDetails' => $productDetails,
                    'parentCategory' => $parentCategory,
                    'subcategory' => $subcategory,
                    'relatedProducts' => $relatedProducts
                ]
            );
        }
        return abort(404, 'Product not found');
    }
}
