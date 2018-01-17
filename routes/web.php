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


Route::get('/admin', function (){         //顯示進入後台畫面
    return view('admin');
});


Route::post('/equipment',['as'=>'equipment.addEquipment','uses'=>'EquipmentController@addEquipment']);//在器材管理新增後台器材
Route::get('/manage',['as'=>'equipment.adminShowEquipment','uses'=>'EquipmentController@adminShowEquipment']);//在後台器材管理顯示所新增的器材
Route::get('/equipmentRemove/{equipment_id}',['as'=>'equipment.remove','uses'=>'EquipmentController@adminEquipmentRemove']);//刪除新增的器材

Route::get('/check',['as'=>'equipment.adminShowEquipmentApplication','uses'=>'EquipmentController@adminShowEquipmentApplication']);//在後台申請審核顯示待核准
Route::get('/applicationPass/{id}',['as'=>'equipment.pass','uses'=>'EquipmentController@adminEquipmentApplicationPass']);//核准使用者租借器材
Route::delete('/applicationFail/{id}',['as'=>'equipment.fail','uses'=>'EquipmentController@adminEquipmentApplicationFail']);//拒絕使用者租借器材


Route::get('/no_return',['as'=>'equipment.adminShowNoReturn','uses'=>'EquipmentController@adminShowNoReturn']);//在後台審核歸還顯示尚未歸還的使用者
Route::get('/no_return/{id}',['as'=>'equipment.adminReturnPass','uses'=>'EquipmentController@adminReturnPass']);//確認使用者已歸還


Route::get('/record',['as'=>'equipment.adminShowRecode','uses'=>'EquipmentController@adminShowRecode']);//查看總租借記錄


Route::group(['prefix' => 'admin'], function() {


});

