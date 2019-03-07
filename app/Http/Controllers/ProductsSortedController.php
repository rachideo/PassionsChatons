<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductsSortedController extends Controller {

    public function show() {

        $chatons = \App\Product::all();
        $sortedbyprice = $chatons->sortBy('name');
        $sortedbyprice->values()->all();

        return view('products-list-name-sorted')->with('tableau', $sortedbyprice);
    }

    public function list() {

        $chatons = \App\Product::all();
        $sortedbyprice = $chatons->sortBy('prix');
        $sortedbyprice->values()->all();

        return view('products-list-price-sorted')->with('tableau', $sortedbyprice);
    }
}