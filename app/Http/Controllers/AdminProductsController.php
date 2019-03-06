<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProductsController extends Controller
{
    public function list(Request $request)
    {
        $chatons = \App\Product::all();

        return view('admin-products-list', ['tableau' => $chatons], ['request' => $request]);
    }

    public function destroy(Request $request)
    {
        $selected = $request->input('check');
        \App\Product::destroy($selected);

        $chatons = \App\Product::all();

        return view('admin-products-list', [
            'tableau' => $chatons,
            'request' => $request,
            'selected' => $selected
        ]);
    }

    public function edit($product)
    {
        $chaton = \App\Product::where('id', $product)->get();

        if (isset($chaton[0]->id)) {

            return view('admin-product-edit', ['chaton' => $chaton[0]]);

        } else {

            return back();
        }
    }
}