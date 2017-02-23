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

Route::resource('sellers','SellersController');
Route::patch('/sellers/{id}','SellersController@modify');

Route::resource('products','ProductController');
Route::patch('/products/{id}','ProductController@modify');

Route::get('/products/{product_id}/reviews','ReviewsController@index');
Route::get('/products/{product_id}/reviews/{id}','ReviewsController@show');
Route::post('/products/{product_id}/reviews','ReviewsController@store');

