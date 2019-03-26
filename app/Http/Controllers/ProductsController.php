<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $chatons = \App\Product::all()->where('category_id','=', '1');
        if ($data == 'name') {
            $sorted = $chatons->sortBy('name');
            $sorted->values()->all();
        } elseif ($data == 'price') {
            $sorted = $chatons->sortBy('price');
            $sorted->values()->all();
        } else {
            $sorted = $chatons;
        }

        return view('products-list')->with('tableau', $sorted);
    }



public function indexpup(Request $request) // POUR LES PUPPIES
{

    $data = $request->input('sort');
    $chatons = \App\Product::all()->where('category_id','=', '2');
    if ($data == 'name') {
        $sorted = $chatons->sortBy('name');
        $sorted->values()->all();
    } elseif ($data == 'price') {
        $sorted = $chatons->sortBy('price');
        $sorted->values()->all();
    } elseif ($data == 'category_id') {
        $sorted = $chatons->sortBy('category_id');
        $sorted->values()->all();
    } else {
        $sorted = $chatons;
    }

    return view('products-list-pups')->with('tableau', $sorted);
}

}