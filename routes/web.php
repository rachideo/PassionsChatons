<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/panier', function () {
    return view('basket');
});

Route::get('/liste-produits', function () {
    return view('products-list');
});

Route::get('fiche-produit/{product}', 'ProductsController@show');