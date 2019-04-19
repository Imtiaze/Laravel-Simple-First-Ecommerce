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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/category/{slug}', 'HomeController@categoryListing')->name('category.list');

Route::get('/cart', 'CartController@showCart')->name('cart');
Route::get('/checkout', 'CartController@showCheckout')->name('checkout');

Route::get('/product/{slug}', 'HomeController@showProduct')->name('product.show');


