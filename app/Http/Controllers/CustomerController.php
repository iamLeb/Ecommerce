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

    public function getInfo(Customers $customers)
    {
        return $customers->all();
    }
    public function getCustomersOrders(Cart $cart)
    {
        return $cart->all();
    }

    public function getOrders()
    {
        return view('front.cart.show', [
            'categories' => Category::getAll(),
        ]);
    }
}
