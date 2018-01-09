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

Route::get('/application_check',function (){
    return view('application_check');
});
Auth::routes();

Route::get('/admin', 'HomeController@index',function (){return view('admin');})->name('home');

Route::get('/equipment_management', function (){return view('equipment_management');});
Route::get('/rental_record',function (){return view('rental_record');});
Route::group(['prefix' => 'admin'], function () {
    Route::get('/index', ['as' => 'admin.index', 'uses' => 'OrderController@index']);

});
