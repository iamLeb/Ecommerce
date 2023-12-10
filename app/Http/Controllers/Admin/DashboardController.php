<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Customers;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'products' => Product::getAll(),
            'orders' => Cart::where('status', 0)->get(),
            'categories' => Category::all(),
        ]);
    }

    public function orders()
    {
        return view('admin.customers.order', [

        ]);
    }
    public function customers()
    {
        return view('admin.customers.index', [
            'users' => Customers::all(),
        ]);
    }

    public function customersShow($id)
    {
        $orders = Cart::where('user_id', $id)->get();
        return view('admin.customers.order', [
            'orders' => $orders,
            'user' => Customers::where('user_id', $id)->first(),
        ]);
    }

    public function orderStatus($id)
    {
        Cart::where('id', $id)->update([
            'status' => 1
        ]);
        return redirect()->back()->with('success', 'Maked as delivered');
    }
    public function orderStatusAll($id)
    {
        Cart::where('user_id', $id)->update([
            'status' => 0
        ]);
        return redirect()->back()->with('success', 'Maked as delivered');
    }
}
