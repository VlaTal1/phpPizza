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
    return view('welcome');
});

// Route::get('/', function(){ return view('pizza.index'); });
// Route::get('/index', function(){ return view('pizza.index'); });
//Route::get('/',  "PizzaController@index");
Route::get('/index',  "PizzaController@index");
Route::get('/about', function(){ return view('pizza.about'); });
Route::get('/menu', "PizzaController@menu")->name('pizza.menu');
Route::get('/show/{id}', "PizzaController@show")->name('pizza.show');
Route::get('/galery', function(){ return view('pizza.galery'); })->name('pizza.galery');
Route::get('/contact', function(){ return view('pizza.contact'); })->name('pizza.contact');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['middleware' => 'auth', 'middleware' => 'access:admin'], function () {
//   Route::get('/admin/create', function(){ return view('admin.create'); });
// });
Route::group(['middleware' => 'auth', 'middleware' => 'access:admin'], function () {
  Route::get('/admin', 'AdminController@index')->name('admin.index');
  Route::get('/admin/create', 'AdminController@create')->name('admin.create');
  Route::post('/admin/store', 'AdminController@store')->name('admin.store');
  Route::get('/admin/show/{id}', 'AdminController@show')->name('admin.show');
  Route::get('/admin/edit/{id}', 'AdminController@edit')->name('admin.edit');
  Route::patch('/admin/update/{id}', 'AdminController@update')->name('admin.update');
  Route::delete('/admin/destroy/{id}', 'AdminController@destroy')->name('admin.destroy');
});
