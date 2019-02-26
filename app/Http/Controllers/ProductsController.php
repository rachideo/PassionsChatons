<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function show($product) {
        return view('product-details')->with('articleName', $product);
    }
}
