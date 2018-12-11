<?php





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('/tokyo','ichiranController@tokyo');
route::get('/list/{prefectures}','ichiranController@list');

route::get('/top','ichiranController@top');
route::get('/ichiran','ichiranController@ichiran');



/*-----------------------------------------------------------------*/

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




// 以下追記
//Route::get('/user', function () {
////    //$users =DB::select('select * from user');
////    $users = users::all(); //全件取得
//    return view('user'
////        'users'=>$users
////    ]);
//});


route::get('/user','mypagecontroller@mypage');