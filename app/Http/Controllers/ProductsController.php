<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller {

    public function show($product) {

        $chaton = \App\Product::where('name',$product)->first();
        if (isset($chaton)) {
            return view('product-details')->with('articleDetails', $chaton);
        } else {
            return back();
        }
    }

    public function index(Request $request)
    {

        $data = $request->input('sort');
        $chatons = \App\Product::all();
        if ($data == 'name') {
            $sorted = $chatons->sortBy('name');
            $sorted->values()->all();
        } elseif ($data == 'price') {
            $sorted = $chatons->sortBy('prix');
            $sorted->values()->all();
        } else {
            $sorted = $chatons;
        }

        return view('products-list')->with('tableau', $sorted);
    }

}