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
Route::get('hello','Hello_Controller@getIndex');

Route::get('/', function () {
    return view('welcome');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('/tokyo','ichiranController@tokyo');
route::get('/yoyaku','ichiranController@yoyaku');
route::get('/top','ichiranController@top');
route::get('/ichiran','ichiranController@ichiran');