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
})->name('welcome');

Route::get('/panier', function () {
    return view('basket');
})->name('basket');

Route::get('/liste-produits', function () {
    return view('products-list');
})->name('product-list');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('fiche-produit/{product}', 'ProductsController@show');