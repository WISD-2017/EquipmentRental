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

Auth::routes();

Route::get('/', function () {
    return view('index');
});

Route::get('/',['as'=>'index.indexShowEquipment','uses'=>'ApplyController@indexShowEquipment']);



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/apply', 'ApplyController@index')->name('apply');





Route::post('/equipment',['as'=>'equipment.addEquipment','uses'=>'EquipmentController@addEquipment']);
Route::get('/manage',['as'=>'equipment.adminShowEquipment','uses'=>'EquipmentController@adminShowEquipment']);
Route::get('/equipmentRemove/{equipment_id}',['as'=>'equipment.remove','uses'=>'EquipmentController@adminEquipmentRemove']);

Route::get('/check', function (){
    return view('application_check');
});




Route::get('/check', function (){
    return view('application_check');
});

Route::get('/record', function () {
    return view('rental_record');
});

Route::group(['prefix' => 'admin'], function() {

    Route::get('', function (){
        return view('admin');
    });

});

