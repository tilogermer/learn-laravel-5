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

Route::get('/', 'WelcomeController@index');
Route::get('/contact', 'WelcomeController@contact');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

//Route::get('/articles', 'ArticlesController@index');
//Route::get('/articles/create', 'ArticlesController@create');

//Route::get('/articles/{id}', 'ArticlesController@show');
//Route::post('/articles', 'ArticlesController@store');
//Route::get('/articles/{id}/edit', 'ArticlesController@edit');

Route::resource('articles', 'ArticlesController');
Route::get('/tags/{tags}', 'TagsController@show');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
