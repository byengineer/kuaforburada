<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::get('/home', 'HomeController@index');
Route::get('/kuafor', 'kuaforlerController@index');
Route::post('/kuafor', 'kuaforlerController@isimEkle');

Route::get('/randevu-ara/{id?}','RandevuAraController@index');
Route::get('/randevu-al/{id?}','RandevuAlController@index');



    Route::group(['prefix' => 'api'], function()
    {
        Route::get('/getCity', 'api\getCityController@index');
        Route::group(['middleware' => 'apiService'], function(){
            Route::get('/login', 'api\LoginController@login');
            Route::resource('/kuaforlistesi', 'api\KuaforController');
        });

    });

