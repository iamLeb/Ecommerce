<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.index', [
            'products' => Product::getAll()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create', [
            'categories' => Category::getAll()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'status' => 'required',
            'desc' => 'nullable'
        ]);

        $product = Product::create($data);

        if ($request->has('image')) {
            foreach ($request->file('image') as $image) {
                $imageName = '-product-' . time() . rand(1, 1000) . '.' . $image->extension();
                $image->move(public_path('images'), $imageName);

                Image::create([
                    'product_id' => $product->id,
                    'image' => $imageName
                ]);
            }
        }
        return redirect()->route('product.index')->with('success', 'Product Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (Product::count() === 0) {
            return view('admin.product.index', [
                'products' => Product::getAll()
            ]);
        } else {
            return view('admin.product.show', [
                'product' => Product::where('id', $id)->first()
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.product.edit', [
           'product' => Product::where('id', $id)->first(),
            'categories' => Category::getAll()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'status' => 'required',
            'desc' => 'required',
            'category_id' => 'required'
        ]);

        Product::where('id', $id)->update($data);
        return back()->with('success', 'Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);
        return redirect()->back()->with('success', 'Product Deleted');
    }
}
