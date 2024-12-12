<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        $cart = session()->get('cart', []);
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return view("cart.index", ["cart" =>  $cart, "total" => $total]);
    }
    public function add(Request $request)
    {
        $validated = $request->validate([
            "id" => ["required"],
            "name" => ["required"],
            "slug" => ["required"],
            "price" => ["required"],
            "color" => ["required"],
            "storage" => ["required"],
            "quantity" => ["required", "integer"],
        ], [
            "color" => "Vui lòng chọn màu sản phẩm",
            "storage" => "Vui lòng chọn dung lượng sản phẩm"
        ]);
        $cart = session()->get('cart', []);
        $productKey = urlencode("{$validated['id']}{$validated['color']}{$validated['storage']}");

        // Add or update product in the cart
        if (isset($cart[$productKey])) {
            $cart[$productKey]['quantity'] += $validated['quantity']; // Update quantity
        } else {
            $cart[$productKey] = $validated; // Add new product
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Đã thêm vào giỏ!');
    }

    public function delete($key)
    {
        $key = urlencode($key);
        $cart = session()->get('cart', []);
        if (isset($cart[$key])) {
            unset($cart[$key]);
            session()->put('cart', $cart);
        }
        return redirect()->back();
    }

    public function updateQuantity(Request $request, $key)
    {
        $key = urlencode($key);
        $validated = $request->validate([
            'quantity' => ['required', 'integer', 'min:1'],
        ]);
        $cart = session()->get('cart', []);
        if (isset($cart[$key])) {
            $cart[$key]['quantity'] = $validated['quantity'];
            session()->put('cart', $cart);
            $subtotal = $cart[$key]['quantity'] * $cart[$key]['price'];
            return response()->json([
                'subtotal' => number_format($subtotal, 0, ',', '.'),
            ]);
        }
        return redirect()->back();
    }
}
