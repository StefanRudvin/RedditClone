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

Route::get('/home', 'HomeController@index');

Route::get('/user/{user}', 'UsersController@show');
Route::get('/admin', 'UsersController@admin');

# Create new comment
Route::post('/posts/{post}', 'CommentsController@store');

# Create new post
Route::get('/posts/new', 'PostsController@create');
Route::post('/posts', 'PostsController@store');

# Edit post
Route::get('/posts/{post}/edit', 'PostsController@edit');
Route::patch('/posts/{post}', 'PostsController@update');

Route::delete('/posts/{post}', 'PostsController@destroy');

Route::get('/posts', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');


Route::get('/posts/{post}/destroy', 'PostsController@destroy');


Auth::routes();


