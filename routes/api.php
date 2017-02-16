<?php

use Illuminate\Http\Request;

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
Route::resource('sellers','SellersController');

Route::post('/sellers/{id}/addresses','AddressController@create');

Route::put('/sellers/{id}/addresses','AddressController@update');

Route::resource('/sellers/{id}/products','ProductController');

Route::get('/products/{id}/reviews','ReviewsController@index');

Route::post('/products/{id}/reviews','ReviewsController@create');
