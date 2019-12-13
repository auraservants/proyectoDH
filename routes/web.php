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
    return view('index');
});
Route::get('/products', 'ProductsController@products');

Route::get('/api/products', 'ProductsController@fetchPlates');

Route::get('/api/ingredients', 'ProductsController@fetchIngredients');

Route::get('/api/plates', 'ProductsController@fetchAllPlates');

Route::get('/faqs', function() {
    return view('faqs');
});
Route::get('/contact', function() {
    return view('contact');
});
Route::get('/cart', function() {
    return view('cart');
});

Route::get('/admin-plates', 'ProductsController@plates');

Route::get('/admin-ingredients', 'ProductsController@ingredients');

Route::get('/admin-orders', 'OrdersController@orders');

Route::get('/admin-add-plates', 'ProductsController@addPlate');

Route::post('/admin-add-plates', 'ProductsController@newPlate');

Route::get('/admin-add-ingredients', 'ProductsController@addIngredient');

Route::post('/admin-add-ingredients', 'ProductsController@newIngredient');

Route::get('/admin-edit-ingredients/{id}', 'ProductsController@editIngredient');

Route::post('/admin-edit-ingredients/{id}', 'ProductsController@editedIngredient');

Route::get('/admin-edit-plates/{id}', 'ProductsController@editPlate');

Route::post('/admin-edit-plates/{id}', 'ProductsController@editedPlate');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home', 'HomeController@storeData');

Route::get('/home','UserController@showChangePasswordForm');

Route::post('/changePassword','UserController@changePassword')->name('changePassword');