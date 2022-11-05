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

Route::get('review', 'ReviewController@index');
Route::post('review/create', 'ReviewController@create');
Route::post('order/create', 'OrderController@create');

Route::get('admin', 'AdminController@index');
Route::get('admin/{id}', 'AdminController@show');
Route::post('admin', 'AdminController@create');
Route::group(['middleware' => 'auth', 'middleware' => 'access:admin'], function () {
    // Здесь продолжайте свое творение
    Route::put('admin/update/{id}', 'AdminController@update');
  });
  Route::group(['middleware' => 'auth', 'middleware' => 'access:admin'], function () {
    // Здесь продолжайте свое творение
    Route::delete('admin/{id}', 'AdminController@delete');
  });