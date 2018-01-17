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

Route::get('/', 'HomeController@index')->name('home');;




Route::post('/Apply', ['as'=>'apply.equipmentApplication','uses'=>'ApplyController@equipmentApplication']);
Route::get('/',['as'=>'index.indexShowEquipment','uses'=>'ApplyController@indexShowEquipment']);
Route::get('/applyview',['as'=>'apply.showapply','uses'=>'ApplyController@showapply']);
Route::delete('/cancelapply/{id}',['as'=>'cancelapply','uses'=>'ApplyController@cancelapply']);



Route::post('/equipment',['as'=>'equipment.addEquipment','uses'=>'EquipmentController@addEquipment']);//新增後台器材
Route::get('/manage',['as'=>'equipment.adminShowEquipment','uses'=>'EquipmentController@adminShowEquipment']);//在後台顯示所新增的器材
Route::get('/equipmentRemove/{equipment_id}',['as'=>'equipment.remove','uses'=>'EquipmentController@adminEquipmentRemove']);//刪除新增的器材

Route::get('/check',['as'=>'equipment.adminShowEquipmentApplication','uses'=>'EquipmentController@adminShowEquipmentApplication']);
Route::get('/applicationPass/{id}',['as'=>'equipment.pass','uses'=>'EquipmentController@adminEquipmentApplicationPass']);
Route::delete('/applicationFail/{id}',['as'=>'equipment.fail','uses'=>'EquipmentController@adminEquipmentApplicationFail']);


Route::get('/no_return',['as'=>'equipment.adminShowNoReturn','uses'=>'EquipmentController@adminShowNoReturn']);
Route::get('/no_return/{id}',['as'=>'equipment.adminReturnPass','uses'=>'EquipmentController@adminReturnPass']);


Route::get('/record',['as'=>'equipment.adminShowRecode','uses'=>'EquipmentController@adminShowRecode']);


Route::group(['prefix' => 'admin'], function() {

    Route::get('', function (){
        return view('admin');
    });

});

