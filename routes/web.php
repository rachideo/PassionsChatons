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

Route::get('fiche-produit/{product}', 'ProductsController@show')
    ->name('product.detail');

Route::get('/liste-produits', 'ProductsController@index')
    ->name('product.list');


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
})->name('fallback');


/*  ______BACKOFFICE_____  */

Route::get('/admin/ajout-produit', 'BackofficeController@create')
    ->name('add.product');

Route::get('/admin/modifier-produit/{editproduct}', 'BackofficeController@show')
    ->name('edit.product');

Route::get('/admin/produit-details/{product}', 'BackofficeController@index')
    ->name('bo.product.details');

Route::get('/admin/liste-produits/', 'BackofficeController@list')
    ->name('bo.products.list');

Route::get('/admin', function () {
    return view('backoffice.welcome-bo');
})->name('welcome.bo');

