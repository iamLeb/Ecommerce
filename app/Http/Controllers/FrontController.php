<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index() {
        return view('front.index', [
            'categories' => Category::getAll(),
            'products' => Product::getAll(),
            'productsAgain' => Product::getRand(),
        ]);
    }


    public function about() {
        return view('front.about', [
            'categories' => Category::getAll(),
        ]);
    }

    public function contact() {
        return view('front.contact', [
            'categories' => Category::getAll(),
        ]);
    }

    public function show($id) {
        if (!Product::all()->count()) {
            return redirect()->route('front.index');
        }
        return view('front.show', [
            'product' => Product::where('id', $id)->first(),
            'categories' => Category::getAll(),
            'products' => Product::all(),
        ]);
    }

    public function all() {
        return view('front.all', [
            'categories' => Category::getAll(),
            'products' => Product::getAll(),
            'latestProducts' => Product::newProduct(),
        ]);
    }

    public function categoryProduct($id)
    {
        return view('front.categoryproduct', [
            'categories' => Category::getAll(),
            'products' => Product::where('category_id', $id)->get(),
            'latestProducts' => Product::newProduct(),
        ]);
    }
}
