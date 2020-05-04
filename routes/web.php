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
