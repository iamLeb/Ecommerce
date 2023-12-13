<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.index', [
            'categories' => Category::getAll()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Category::validate($request);

        $imageName = '-category-' . time() . rand(1, 1000) . '.' . $request->photo->extension();

        $request->photo->storeAs('afg/', $imageName, 's3');

        $image = new Category([
            'name' => $request->get('name'),
            'desc' => $request->get('desc'),
            'photo' => $imageName,
        ]);
        $image->save();

        return back()->with('success', 'Category Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // code here
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = new Category();
        $data = $request->validate([
            'name' => 'required',
            'desc' => 'required',
        ]);

        $category->updateCategory($data, $id);

        return redirect()->back()->with('success', 'Category Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 1;
    }
}
