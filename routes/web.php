<?php




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('/tokyo','ichiranController@tokyo');
route::get('/list/{prefectures}','ichiranController@list');

route::get('/top','ichiranController@top');
route::get('/ichiran','ichiranController@ichiran');



/*-----------------------------------------------------------------*/

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
route::get('/detail/{id}' ,'TourController@detail');
route::get('/test' , function (){
   return view('test');
});



