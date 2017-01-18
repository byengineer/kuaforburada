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
Route::post('/randevu-ara/listele','RandevuAraController@randevuListele');
Route::post('/randevu-ara/al','RandevuAraController@randevuAl');
Route::get('/randevu-al/{id?}','RandevuAlController@index');
Route::post('/profil/resimYukle', 'ProfileController@resimYukle');
Route::post('/profil/bilgiGuncelle', 'ProfileController@bilgiGuncelle');



    Route::group(['prefix' => 'api'], function()
    {
        Route::get('/getCity', 'api\getCityController@index');
        Route::get('/getSacStilleri', 'api\getCityController@sacStilleri');
        Route::post('/uyeKaydet', 'api\ProfileController@uyeKaydet');
        Route::resource('/kuaforlistesi', 'api\KuaforController');
        Route::get('uyeListele','api\ProfileController@uyeListele');
        /*
        Route::group(['middleware' => 'apiService'], function(){
            Route::get('/login', 'api\loginController@login');
            Route::resource('/kuaforlistesi', 'api\KuaforController');

*/

        Route::get('/login', 'api\loginController@login');
        Route::group(['middleware' => 'apiService'], function(){
            Route::post('/uyeGuncelle', 'api\ProfileController@uyeGuncelle');

        });
    });

