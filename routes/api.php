<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/sellers','SellersController@index');
Route::get('/sellers/{id}','SellersController@show');
Route::put('/sellers/{id}','SellersController@update');
Route::patch('/sellers/{id}','SellersController@modify');
Route::delete('/sellers/{id}','SellersController@destroy');


Route::post('/sellers/{id}/address', 'AddressController@store');
Route::put('/sellers/{id}/address', 'AddressController@update');

Route::get('/products','ProductController@index');
Route::get('/products/{id}','ProductController@show');
Route::post('/products','ProductController@store');
Route::put('/products/{id}','ProductController@update');
Route::patch('/products/{id}','ProductController@modify');
Route::delete('/products/{id}','ProductController@destroy');

Route::get('/products/{product_id}/reviews','ReviewsController@index');
Route::get('/products/{product_id}/reviews/{id}','ReviewsController@show');
Route::post('/products/{product_id}/reviews','ReviewsController@store');
Route::delete('/products/{product_id}/reviews/{id}','ReviewsController@destroy');

