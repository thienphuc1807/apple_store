<?php

namespace App\Http\Controllers;

use App\Models\orderitems;
use App\Models\orders;
use App\Models\products;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    // public function index()
    // {
    //     $orders = Orders::all();
    //     return view("orders.index", compact("orders"));
    // }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "fullName" => "required|string",
            "gender" => "required|string",
            "phoneNumber" => "required|string",
            "city" => "required|string",
            "district" => "required|string",
            "ward" => "required|string",
            "address" => "required|string",
            "cart" => "required|array",
            "cart.*.product_id" => "required|integer",
            "cart.*.key" => "required|string",
            "cart.*.name" => "required|string",
            "cart.*.quantity" => "required|integer|min:1",
            "cart.*.color" => "required|string",
            "cart.*.price" => "required|numeric|min:0",
            "cart.*.storage" => "nullable|string",
        ], [
            "fullName.required" => "Họ và tên không được để trống",
            "phoneNumber.required" => "Số điện thoại không được để trống",
            "city.required" => "Vui lòng chọn tỉnh thành",
            "district.required" => "Vui lòng chọn quận huyện",
            "ward.required" => "Vui lòng chọn phường xã",
            "address.required" => "Địa chỉ không được để trống",
        ]);

        $order = orders::create([
            'fullName' => $validated['fullName'],
            'gender' => $validated['gender'],
            'phoneNumber' => $validated['phoneNumber'],
            'address' => $validated['address'],
            'district' => $validated['district'],
            'ward' => $validated['ward'],
            'city' => $validated['city'],
        ]);

        foreach ($validated['cart'] as $item) {
            orderitems::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'name' => $item['name'],
                'color' => $item['color'],
                'key' => $item['key'],
                'price' => $item['price'],
                'storage' => $item['storage'],
            ]);
            $product = products::find($item['product_id']);
            $product->decrement('stock', $item['quantity']);
        }

        session()->forget('cart');
        toastr()->success('Đặt hàng thành công');

        return redirect()->back();
    }
}
