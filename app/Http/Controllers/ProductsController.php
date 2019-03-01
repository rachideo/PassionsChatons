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
                'description' => "Raised in the cozy atmosphere of Irish cottages, Fiddles are the best cuddlers ever who love to curl up next to fireplaces on cold winter nights."
            ],
            'mitten' => [
                'nom' => "Mitten",
                'prix' => 289,
                'photo' => "images/Mitten.jpg",
                'description' => "Mittens are small, fluffy kittens. They enjoy purring, stretching and scratching things. If you buy a mitten prepare to be ignored and to have your furniture destroyed."
            ],
            'strawberry' => [
                'nom' => "Strawberry",
                'prix' => 599,
                'photo' => "images/Strawberry.jpg",
                'description' => "Strawberries suit their name very well . Just like the fruit, Strawberries are lovely and joyful! Always ready to take a nap, they are the cutest pets ever."
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