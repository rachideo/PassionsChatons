<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller {

    public function show($product) {

        $chatons = [
            [
                'nom' => "Fiddle",
                'prix' => 399,
                'photo' => "images/Fiddle.jpg",
            ],
            [
                'nom' => "Mitten",
                'prix' => 289,
                'photo' => "images/Mitten.jpg",
            ],
            [
                'nom' => "Strawberry",
                'prix' => 599,
                'photo' => "images/Strawberry.jpg",
            ]
        ];
        return view('product-details')->with('articleDetails', $chatons[$product]);
    }
}