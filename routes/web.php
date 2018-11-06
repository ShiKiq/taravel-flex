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


Route::get('/top', function () {
    return view('top');
});

Route::get('/ichiran', function () {
    return view('ichiran');
});

Route::get('/yoyaku', function () {
    return view('yoyaku');
});
