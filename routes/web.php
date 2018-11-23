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

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/aaa', function () {
    return view('aaa');
});
route::get('/tour','TourController@tour');
route::get('/uuu','TourController@aaa');
route::get('/detail_test/{id}' ,'TourController@detail');
route::get('/test' , function (){
   return view('test');
});


