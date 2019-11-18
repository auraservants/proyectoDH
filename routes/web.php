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
Route::get('/login', function() {
    return view('login');
});
Route::post('/login', 'UsersController@login');

Route::get('/signup', function() {
    return view('signup');
});
Route::post('/signup', 'UsersController@signup');

Route::get('/profile/{id}','UsersController@profile');

Route::get('/products', function() {
    return view('products');
});
Route::get('/faqs', function() {
    return view('faqs');
});
Route::get('/contact', function() {
    return view('contact');
});
Route::get('/cart', function() {
    return view('cart');
});
Route::get('/admin-plates', function() {
    return view('admin-plates');
});
Route::get('/admin-ingredients', function() {
    return view('admin-ingredients');
});
Route::get('/admin-orders', function() {
    return view('admin-orders');
});
Route::get('/admin-add-plates', function() {
    return view('admin-add-plates');
});
Route::get('/admin-add-ingredients', function() {
    return view('admin-add-ingredients');
});
Route::get('/admin-edit-ingredients', function() {
    return view('admin-edit-ingredients');
});
Route::get('/admin-edit-plates', function() {
    return view('admin-edit-plates');
});