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

Auth::routes();

//Requires user to be logged in to access pages
Route::group(["middleware" => "auth"], function () {
  Route::resource('stores', 'StoresController', ['except' => [
      'show', 'index', 'start'
  ]]);
  Route::resource('reviews', 'ReviewsController', ['except' => [
      'show', 'index', 'start'
  ]]);
  Route::resource('mobiles', 'MobilesController', ['except' => [
      'show', 'index', 'start'
  ]]);
  Route::resource('tablets', 'TabletsController', ['except' => [
      'show', 'index', 'start'
  ]]);
  Route::resource('computers', 'ComputerssController', ['except' => [
      'show', 'index', 'start'
  ]]);
});

//index, show and start can be accessed without being logged in
Route::resource('reviews', 'ReviewsController', ['only' => [
    'index', 'show', 'start'
]]);
Route::resource('stores', 'StoresController', ['only' => [
    'index', 'show', 'start'
]]);
Route::resource('mobiles', 'MobilesController', ['only' => [
    'index', 'show', 'start'
]]);
Route::resource('tablets', 'TabletsController', ['only' => [
    'index', 'show', 'start'
]]);
Route::resource('computers', 'ComputersController', ['only' => [
    'index', 'show', 'start'
]]);
