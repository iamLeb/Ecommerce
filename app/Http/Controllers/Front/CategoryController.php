<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategory()
    {
        return view('front.dashboard', [
            
        ]);
    }
}
