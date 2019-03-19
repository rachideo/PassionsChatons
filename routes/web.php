<?php

/*  _____ACCUEIL_____  */

route::get('/', function () {
    return view('welcome');
})->name('welcome');


/*  _____PANIER_____  */

Route::get('/panier', 'BasketController@index')
    ->name('basket_index');

Route::post('/panier', 'BasketController@store')
    ->name('basket_store');

Route::put('/panier', 'BasketController@update')
    ->name('basket_update');

Route::delete('/panier', 'BasketController@destroy')
    ->name('basket_destroy');


/*  _____PRODUITS_____  */

Route::get('/liste-byName', 'ProductsController@listByName')
    ->name('product_list_byName');

Route::get('/liste-byPrice', 'ProductsController@listByPrice')
    ->name('product_list_byPrice');

Route::get('fiche-produit/{product}', 'ProductsController@show')
    ->name('product_detail');

Route::get('/liste-produits', 'ProductsController@index')
    ->name('product_list');

/*  _____ORDER_____  */

Route::get('/order', 'OrderController@show')
    ->name('order');

/*  _____CONNEXION_____  */

//Route::get('/connexion', function () {
//    return view('sign-in');
//})->name('sign_in');

Route::get('/connexion/creer-compte', function () {
    return view('sign-up');
})->name('sign_up');


/*  _____COMPTE_____  */

Route::get('/mon-compte', 'UsersController@show')
    ->name('my_account');


Route::get('/identification', function () {
    return view('sign-in');
})->name('sign_in');



/*  ______CONTACT_____  */

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


///*  ______FALLBACK_____  */
//
//Route::fallback(function () {
//    return view('welcome');
//})->name('fallback');


/*  ______BACKOFFICE_____  */

Route::get('/admin/ajout-produit', function () {
    return view ('backoffice.add-product-bo');
})->name('add_product');

Route::post('/admin/liste-produits/', 'BackOfficeController@store')
    ->name('store_product');

Route::put('/admin/liste-produits/', 'BackofficeController@update')
    ->name('update_product');

Route::delete('/admin/liste-produits/', 'BackofficeController@destroy')
    ->name('delete_product');

Route::get('/admin/produit-details/{product}', 'BackofficeController@index')
    ->name('bo_product_details');

Route::get('/admin/liste-produits/', 'BackofficeController@list')
    ->name('bo_products_list');

Route::get('/admin', function () {
    return view('backoffice.dashboard');
})->name('bo_dashboard');
