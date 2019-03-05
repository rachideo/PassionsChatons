<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller {

    public function show($product)
    {
        $chatons = DB::select('select * from products where id = ?', [$product]);

//        if (isset($chatons[$product])) {

            return view('product-details', ['chaton' => $chatons]);

//        } else {
//
//            return back();
//        }
    }

    public function list()
    {
        $chatons = DB::select('select * from products');

        return view('products-list', ['chatons' => $chatons]);
    }

}