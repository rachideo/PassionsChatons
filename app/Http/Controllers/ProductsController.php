<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductsController extends Controller {

    public function show($product) {

        $chaton = DB::select('select * from products where name = :name', ['name' => $product]);

        if (isset($chaton[0])) {
            return view('product-details')->with('articleDetails', $chaton[0]);
        } else {
            return back();
        }
    }

    public function list() {

        $chatons = DB::select('select * from products');

        return view('products-list')->with('tableau', $chatons);
    }
}