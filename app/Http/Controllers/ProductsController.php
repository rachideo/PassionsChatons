<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller {

    public function show($product) {

        $chatons = [
            'fiddle' => [
                'nom' => "Fiddle",
                'prix' => 399,
                'photo' => "images/Fiddle.jpg",
            ],
            'mitten' => [
                'nom' => "Mitten",
                'prix' => 289,
                'photo' => "images/Mitten.jpg",
            ],
            'strawberry' => [
                'nom' => "Strawberry",
                'prix' => 599,
                'photo' => "images/Strawberry.jpg",
            ]
        ];

        if (isset($chatons[$product])) {
            return view('product-details')->with('articleDetails', $chatons[$product]);
        } else {
            return back();
        }
    }

    public function list() {

        $chatons = [
            'fiddle' => [
                'nom' => "Fiddle",
                'prix' => 399,
                'photo' => "images/Fiddle.jpg",
            ],
            'mitten' => [
                'nom' => "Mitten",
                'prix' => 289,
                'photo' => "images/Mitten.jpg",
            ],
            'strawberry' => [
                'nom' => "Strawberry",
                'prix' => 599,
                'photo' => "images/Strawberry.jpg",
            ]
        ];
        return view('products-list')->with('tableau', $chatons);
        }
}