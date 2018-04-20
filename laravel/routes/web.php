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

Route::get('/', 'PagesController@getHome');
Route::get('/Home', 'PagesController@getHome');
Route::get('/blog', 'PagesController@getBlog');
Route::get('/snake', 'PagesController@getSnake');

// Authentication Routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
   
// Registration Routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Route::get('/post_editor', 'PagesController@getPostEditor');
//Route::get('/profil', 'PagesController@getProfil');
//Route::get('/post/create', 'PagesController@getPostCreate');

Route::resource('posts', 'PostController');