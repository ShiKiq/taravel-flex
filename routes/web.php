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
route::get('/aaa','ichiranController@yoyaku');
route::get('/top','ichiranController@top');
route::get('/ichiran','ichiranController@ichiran');

//購入画面
Route::get("yoyaku",function(){
    return view("yoyaku");
});

//購入処理

Route::post('/yoyaku',function (){
    $adult =request('adult');
    $children =request('children');
    $name =request('name');
    $email=request('email');
    $tel=request('tel');
    $address=request('address');
    DB::insert("insert into yoyakus (adult,children,name,email,tel,address)value(?,?,?,?,?,?)",[$adult,$children,$name,$email,$tel,$address]);
    return redirect ("/kanryo");
});

Route::get("kanryo",function(){
    return view("kanryo");
});


Route::get("rireki",function(){
    return view("rireki");
});

