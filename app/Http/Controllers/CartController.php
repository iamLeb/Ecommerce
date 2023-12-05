<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Customers;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('front.cart.index',[
            'categories' => Category::getAll()
        ]);
    }

    public function show(Request $request)
    {
        Cart::create($request->id());
    }

    public function checkout()
    {
        return view('front.cart.checkout', [
            'categories' => Category::getAll(),
        ]);
    }

    public function store(Request $request, Customers $customers)
    {
        $check = $customers->where('user_id', $request->input('generate'))->first();
        if (!$check) {
            Customers::create([
                'user_id' => $request->input('generate'),
                'contact' => $request->input('contact'),
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'),
                'address' => $request->input('address'),
                'city' => $request->input('city'),
                'province' => $request->input('province'),
                'instruction' => $request->input('instruction'),
                // Add other necessary fields
            ]);
        }

        foreach ($request->input('cart') as $cart) {
            Cart::create([
                'user_id' => $request->input('generate'),
                'name' => $cart["name"],
                'image' => $cart["image"],
                'price' => $cart["price"],
                'status' => $cart["status"],
                'quantity' => $cart["quantity"]
            ]);
        }
        return response()->json(['success' => true, 'message' => 'Item added to cart']);
    }
}

