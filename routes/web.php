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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/apply', 'ApplyController@index')->name('apply');





Route::post('/equipment',['as'=>'equipment','uses'=>'EquipmentController@addEquipment']);
Route::get('/check', function (){
    return view('application_check');
});

Route::get('/manage', function () {
    return view('equipment_management');
});

Route::get('/record', function () {
    return view('rental_record');
});
Route::group(['prefix' => 'admin'], function() {

    Route::get('', function (){
        return view('admin');
    });




});

