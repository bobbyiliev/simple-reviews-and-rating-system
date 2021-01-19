<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show($id)
    {
        $product = \App\Models\Product::findOrFail($id);
        return view('product', compact('product'));
    }
}
