<?php

use Illuminate\Support\Facades\Route;

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




Route::get('/', 'PagesController@index');
Route::get('/diningmethod', 'PagesController@diningmethod');
Route::get('/eatin', 'ProductController@getIndex');
Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);
Route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);
Route::get('/signup',[
    'uses' => 'UsersController@getSignup',
    'as' => 'users.signup'
]);

Route::post('/signup',[
    'uses' => 'UsersController@postSignup',
    'as' => 'users.signup'
]);



//Route::get('/order/eatin', 'OrderController@eatin');

//Route::get('/login', 'PagesController@eatin');
