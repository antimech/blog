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
Route::get('/blog', 'Posts\WebController@index')->name('blog.index');
Route::get('/blog/{post}', 'Posts\WebController@show')->name('blog.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/home/posts', 'Posts\UserController');