<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

// 路由别名
Route::get('user/center/{id}',['as' => 'center', function (){
    return route('center');
}]);

Route::get('student/index','StudentController@index');
Route::get('student/create','StudentController@create');
Route::post('student/store','StudentController@store');



Route::group(['middleware' => ['web']], function (){
    Route::get('/', function () {
        return view('welcome');
//        return 'welcome';
    });
    Route::auth();

    Route::get('/home', 'HomeController@index');
});


Route::group(['middleware' => ['api']], function (){

});
