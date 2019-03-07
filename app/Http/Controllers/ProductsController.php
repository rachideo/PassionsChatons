<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductsController extends Controller {

    public function show($product) {

        $chaton = \App\Product::all();

        if (isset($chaton[0])) {
            return view('product-details')->with('articleDetails', $chaton[0]);
        } else {
            return back();
        }
    }

    public function list() {

        $chatons = \App\Product::all();

        return view('products-list')->with('tableau', $chatons);
    }

}