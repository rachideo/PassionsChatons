<?php

/*  _____ACCUEIL_____  */

route::get('/', function () {
    return view('welcome');
})->name('welcome');

/*  _____PANIER_____  */

Route::post('/panier', 'BasketController@index')
    ->name('basket');

/*  _____PRODUITS_____  */

Route::get('/liste-produits', 'ProductsController@list')
    ->name('product.list');

Route::get('/liste-byName', 'ProductsController@listByName')
    ->name('product.list.byName');

Route::get('/liste-byPrice', 'ProductsController@listByPrice')
    ->name('product.list.byPrice');

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

Route::get('/admin/liste-produits', 'AdminProductsController@list')
    ->name('product.list.admin');

Route::get('/admin/liste-produits/create', 'AdminProductsController@create')
    ->name('product.create.admin');

Route::post('/admin/liste-produits', 'AdminProductsController@store')
    ->name('product.store.admin');

Route::delete('/admin/liste-produits', 'AdminProductsController@destroy')
    ->name('product.delete.admin');

Route::put('/admin/liste-produits', 'AdminProductsController@update')
    ->name('product.update.admin');

Route::get('/admin/edit/{product}', 'AdminProductsController@edit')
    ->name('product.detail.admin');