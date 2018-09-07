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

use App\Task;

Route::get('/tasks','tasksController@index');
Route::get('/tasks/{task}','tasksController@show');

Route::get('/','PostsController@index');
Route::get('/posts/create','PostsController@create');