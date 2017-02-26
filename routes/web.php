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

Route::get('/', ['as' => 'index', 'uses' => 'ArticlesController@index']);
Route::get('/create', ['as' => 'articles.create', 'uses' => 'ArticlesController@create']);
Route::get('/show/{id}', ['as' => 'articles.show', 'uses' => 'ArticlesController@show']);
Route::delete('/destroy/{id}', ['as' => 'articles.destroy', 'uses' => 'ArticlesController@destroy']);

Auth::routes();

Route::get('/home', 'HomeController@index');
