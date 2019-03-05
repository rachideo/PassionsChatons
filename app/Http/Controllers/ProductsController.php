<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller {

    public function show($product)
    {
        $chaton = \App\Product::where('name', $product)->get();

        if (isset($chaton[0]->id)) {

            return view('product-details', ['chaton' => $chaton[0]]);

        } else {

            return back();
        }
    }

    public function list()
    {
        $chatons = \App\Product::all();

        return view('products-list', ['chatons' => $chatons]);
    }

    // Tri par Nom
    public function listByName()
    {
        $chatons = \App\Product::all()->sortBy('name');

        return view('products-list', ['chatons' => $chatons]);
    }

    // Tri par prix
    public function listByPrice()
    {
        $chatons = \App\Product::all()->sortByDesc('price');

        return view('products-list', ['chatons' => $chatons]);
    }

}