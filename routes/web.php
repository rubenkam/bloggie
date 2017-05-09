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

Route::get('/home', 'HomeController@index');


Route::get('/posts', function () {
  return view('posts');
});

Route::get('posts/create', 'PostController@create');

Route::post('/posts', 'PostsController@store')


// Route::get('/create', 'PostsController@create');


Route::get('profile', 'UserController@profile'); //routes voor profile.blade.php
Route::post('profile', 'UserController@update_avatar');
Route::auth();
