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

Route::get('fiche-produit/{product}', 'ProductsController@show')
    ->name('product_detail');

Route::get('/liste-produits', 'ProductsController@index')
    ->name('product_list');

Route::get('/liste-chiots', 'ProductsController@indexpup')
    ->name('product_list_pups');


/*  _____ORDER_____  */

Route::get('/order', 'OrderController@show')
    ->name('order')
    ->middleware('hasOrder');


/*  _____CONNEXION_____  */

Route::get('/connexion/creer-compte', function () {
    return view('sign-up');
})->name('sign_up');


/*  _____COMPTE_____  */

Route::get('/mon-compte', 'UsersController@show')
    ->name('my_account');

Route::get('/mon-compte/{userId}/mes-adresses', 'AddressesController@edit')
    ->name('user_addresses');

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


Route::get('/admin', 'BackofficeController@dashboard')
    ->name('bo_dashboard');

// Produits :

Route::get('/admin/ajout-produit', 'BackofficeController@create')
    ->name('add_product');

Route::post('/admin/liste-produits/', 'BackofficeController@store')
    ->name('store_product');

Route::put('/admin/liste-produits/', 'BackofficeController@update')
    ->name('update_product');

Route::put('/admin/liste-produit/annulation', 'BackofficeController@cancel')
    ->name('cancel_edit');

Route::delete('/admin/liste-produits/', 'BackofficeController@destroy')
    ->name('delete_product');

Route::get('/admin/produit-details/{product}', 'BackofficeController@index')
    ->name('bo_product_details');

Route::get('/admin/liste-produits/', 'BackofficeController@list')
    ->name('bo_products_list');

// Commandes :

Route::get('/admin/commandes', 'BackofficeOrdersController@index')
    ->name('bo_orders_list');

Route::get('/admin/commandes/{orderId}', 'BackofficeOrdersController@show')
    ->name('bo_order_details');

Route::delete('/admin/commandes', 'BackofficeOrdersController@destroy')
    ->name('delete_order');

// Utilisateurs :

Route::get('/admin/utilisateurs/', 'BackofficeUsersController@list')
    ->name('bo_users_list');

Route::get('/admin/utilisateur-details/{user}', 'BackofficeUsersController@index')
    ->name('bo_user_details');

Route::put('/admin/utilisateurs', 'BackofficeUsersController@update')
    ->name('bo_update_user');

// Auth :

Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home');


