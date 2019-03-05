<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller {

    public function show($product)
    {
        $chaton = \App\Product::where('name', $product)->get();

        if (empty($chatons[$product])) {

            return view('product-details', ['chaton' => $chaton]);

        } else {

            return back();
        }
    }

    public function list()
    {
        $chatons = \App\Product::all();

        return view('products-list', ['chatons' => $chatons]);
    }

}