<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        return $request->all();
    }

    public function getInfo(Customers $customers, Request $request)
    {
        $id = $request->id;
        return $customers->where('user_id', $id)->first();
    }
    public function getCustomersOrders(Cart $cart, Request $request)
    {
        $id = $request->id;
        return $cart->where('user_id', $id)->get();
    }

    public function getOrders()
    {
        return view('front.cart.show', [
            'categories' => Category::getAll(),
        ]);
    }
}
