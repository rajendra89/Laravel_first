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
Route::get('/','ProductController@index');
Route::get('products','ProductController@index');
Route::group( ['middleware' => 'auth'], function(){
	//views that can only access by loged in user
	//Route::get('products','ProductController@index');
	Route::get('products/new','ProductController@create');
	Route::post('products/save','ProductController@store')->name('save');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
