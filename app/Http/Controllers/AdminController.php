<?php

namespace App\Http\Controllers;

use App\Models\orderitems;
use App\Models\orders;
use App\Models\products;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $products = products::all();
        $users = User::all();
        $orders = orders::all();
        $orderitems = orderitems::all();
        $sum = 0;
        foreach ($orderitems as $orderitem) {
            $sum += $orderitem->price * $orderitem->quantity;
        }
        return view(
            'admin.dashboard',
            ['products' => $products, 'users' => $users, 'orders' => $orders, 'sum' => $sum]
        );
    }

    public function products()
    {
        $products = products::all();
        return view('admin.products', ['products' => $products]);
    }

    public function editProduct($id)
    {
        $product = products::find($id);
        return view('admin.editProduct', ['product' => $product]);
    }

    public function update(Request $request, string $id)
    {
        request()->validate([
            'name' => ['required', 'min:10'],
            'slug' => ['required', 'alpha_dash'],
            'old_price' => ['numeric'],
            'actual_price' => ['numeric'],
            'category' => ['required'],
            'sub_category' => ['required'],
        ], [
            'name.required' => 'Tên sản phẩm không được để trống',
            'name.min' => 'Tên sản phẩm phải có ít nhất 10 ký tự',
            'slug.required' => 'Slug không được để trống',
            'slug.alpha_dash' => 'Slug chỉ bao gồm chữ cái, số, dấu gạch dưới và dấu gạch ngang',
            'old_price.numeric' => 'Giá gốc phải là số',
            'actual_price.numeric' => 'Giá khuyến mãi phải là số',
            'category.required' => 'Vui lòng chọn danh mục',
            'sub_category.required' => 'Vui lòng chọn danh mục con',
        ]);
        $product = products::find($id);
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->old_price = $request->old_price;
        $product->actual_price = $request->actual_price;
        $product->categories_id = $request->category;
        $product->subcategories_id = $request->sub_category;
        $product->save();
        return redirect('/admin/products');
    }

    public function create()
    {
        return view('admin.createProduct');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required', 'min:10'],
            'slug' => ['required', 'alpha_dash'],
            'old_price' => ['numeric'],
            'actual_price' => ['numeric'],
            'stock' => ['required'],
            'category' => ['required'],
            'sub_category' => ['required'],
        ], [
            'name.required' => 'Tên sản phẩm không được để trống',
            'name.min' => 'Tên sản phẩm phải có ít nhất 10 ký tự',
            'slug.required' => 'Slug không được để trống',
            'slug.alpha_dash' => 'Slug chỉ bao gồm chữ cái, số, dấu gạch dưới và dấu gạch ngang',
            'old_price.numeric' => 'Giá gốc phải là số',
            'actual_price.numeric' => 'Giá khuyến mãi phải là số',
            'category.required' => 'Vui lòng chọn danh mục',
            'sub_category.required' => 'Vui lòng chọn danh mục con',
            'stock.required' => 'Vui lòng nhập số lượng sản phẩm',
        ]);
        $product = new products();
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->old_price = $request->old_price;
        $product->stock = $request->stock;
        $product->actual_price = $request->actual_price;
        $product->categories_id = $request->category;
        $product->subcategories_id = $request->sub_category;

        if ($product->save()) {
            flash()->flash('success', 'Đã thêm sản phẩm mới.', [], 'Thành công');
            return redirect('/admin/products');
        } else {
            flash()->error('Đã xảy ra lỗi.');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = products::find($id);
        if ($product->delete()) {
            return redirect('/admin/products')->with('success', 'Xóa sản phẩm thành công');
        } else {
            return redirect('/admin/products')->with('error', 'Đã xảy ra lỗi');
        }
    }
}
