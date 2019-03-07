<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackofficeController extends Controller {

    public function create()
    {
        return view('backoffice.add-product-bo');
    }

    public function show($product)
    {
        $chaton = \App\Product::where('name',$product)->first();
        if (isset($chaton)) {
            return view('backoffice.edit-product-details-bo')->with('articleDetails', $chaton);
        } else {
            return back();
        }
    }

    public function list(Request $request)
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

        return view('backoffice.products-list-bo')->with('tableau', $sorted);
    }

    public function index($product)
    {
        $chaton = \App\Product::where('name',$product)->first();
        if (isset($chaton)) {
            return view('backoffice.product-details-bo')->with('articleDetails', $chaton);
        } else {
            return back();
        }
    }
}