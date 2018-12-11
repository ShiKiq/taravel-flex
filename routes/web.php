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


// Admin Interface Routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
    // Backpack\CRUD: Define the resources for the entities you want to CRUD.
    CRUD::resource('tag', 'Admin\TagCrudController');

    // [...] other routes
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
route::get('/email',function() {
    return view('test');
});

route::get('/aaa','aaaController@aaa');
route::get('/sale','saleController@sale');
route::post('/create','saleController@create');
route::get('/mail','MailController@send');


route::get('/yoyaku','yoyakuController@yoyaku')->middleware('auth');
route::post('/create','yoyakuController@create');
route::get('/rireki','yoyakuController@rireki');