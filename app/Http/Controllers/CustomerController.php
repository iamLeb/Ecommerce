<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        return $request->all();
    }
}
