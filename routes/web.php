<?php

/*  _____ACCUEIL_____  */

route::get('/', function () {
    return view('welcome');
})->name('welcome');

/*  _____PANIER_____  */

Route::get('/panier', function () {
    return view('basket');
})->name('basket');

/*  _____PRODUITS_____  */

Route::get('/liste-produits', 'ProductsController@list')
    ->name('product.list');

Route::get('fiche-produit/{product}', 'ProductsController@show')
    ->name('product.detail');

/*  _____CONNEXION_____  */

Route::get('/connexion', function () {
    return view('sign-in');
})->name('sign-in');

Route::get('/connexion/creer-compte', function () {
    return view('sign-up');
})->name('sign-up');

/*  _____COMPTE_____  */

Route::get('/mon-compte/{user}', function () {
    return view('my-account');
})->name('account');

/*  ______CONTACT_____  */

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

/*  ______FALLBACK_____  */

Route::fallback(function () {
    return view('welcome');
});

/*  ______BACKOFFICE_____  */

Route::get('/admin/liste-produit', 'AdminProductsController@list')
    ->name('product.detail');


//Route::get('/admin/fiche-produit/{product}', 'AdminProductsController@show')
//    ->name('product.detail');