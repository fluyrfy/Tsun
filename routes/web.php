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




Route::get('/', [
    'uses' => 'PagesController@index',
    'as' => 'pages.index'
    ]);
Route::get('/diningmethod', [
    'uses' => 'PagesController@diningmethod',
    'as' => 'order.diningmethod'
]);
Route::get('/news', [
    'uses' => 'PagesController@news',
    'as' => 'pages.news'
]);
Route::get('/orderin', [
    'uses' => 'ProductController@getOrders',
    'as' => 'get.orders'
]);
Route::get('/eatin', [
    'uses' => 'ProductController@getIndex',
    'as' => 'order.eatin'
]);
Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);

Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
    ]);
Route::post('/checkout', [
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
    ]);

Route::get('/reduce/{id}', 'ProductController@getReductByOne')->name('product.reduceByOne');
Route::get('/remove/{id}', 'ProductController@getRemoveItem')->name('product.remove');

Route::group(['prefix' => 'users'], function ()
{
    Route::group(['middleware' =>'guest'], function()
    {
        Route::get('/signup',[
            'uses' => 'UsersController@getSignup',
            'as' => 'users.signup'
        ]);

        Route::post('/signup',[
            'uses' => 'UsersController@postSignup',
            'as' => 'users.signup'
        ]);

        Route::get('/signin',[
            'uses' => 'UsersController@getSignin',
            'as' => 'users.signin'
        ]);

        Route::post('/signin',[
            'uses' => 'UsersController@postSignin',
            'as' => 'users.signin'
        ]);
    });
    Route::group(['middleware' =>'auth'], function(){
        Route::get('/profile',[
            'uses' => 'UsersController@getProfile',
            'as' => 'users.profile'
        ]);
        Route::get('/logout',[
            'uses' => 'UsersController@getLogout',
            'as' => 'users.logout'
        ]);
    });

});



//Route::get('/order/eatin', 'OrderController@eatin');

//Route::get('/login', 'PagesController@eatin');
