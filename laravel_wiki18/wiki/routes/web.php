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
Route::get('index', "MainController@index") ;
Route::match(['get', 'post'], '/page/{id?}', 'PageController@testAction')->name('TestAction');
Route::POST('/page/store', 'PageController@store')->name('store_page');
