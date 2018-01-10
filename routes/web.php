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
    return view('index');
});


Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Route::get('/index', ['as' => 'admin.index', 'uses' => 'OrderController@index']);

});

Route::get('/admin', 'HomeController@index')->name('home');

Route::get('/home', function(){
   return view('home');
});

Route::get('/apply', 'ApplyController@index')->name('apply');

Route::group(['prefix' => 'admin'], function() {

    Route::get('', 'HomeController@index',function (){return view('admin');})->name('home');

    Route::get('/check', function (){
        return view('application_check');
    });

    Route::get('/manage', function () {
        return view('equipment_management');
    });

    Route::get('/record', function () {
        return view('rental_record');
    });
});

