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






Route::get('/home', 'HomeController@index')->name('home');


Route::post('/Apply', ['as'=>'apply.equipmentApplication','uses'=>'ApplyController@equipmentApplication']);
Route::get('/',['as'=>'index.indexShowEquipment','uses'=>'ApplyController@indexShowEquipment']);
Route::get('/cancelapply/{apply_id}',['as'=>'unapply','uses'=>'ApplyController@cancelapply']);




Route::post('/equipment',['as'=>'equipment.addEquipment','uses'=>'EquipmentController@addEquipment']);//新增後台器材
Route::get('/manage',['as'=>'equipment.adminShowEquipment','uses'=>'EquipmentController@adminShowEquipment']);//在後台顯示所新增的器材
Route::get('/equipmentRemove/{equipment_id}',['as'=>'equipment.remove','uses'=>'EquipmentController@adminEquipmentRemove']);//刪除新增的器材

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

