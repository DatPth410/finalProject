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



Route::get('/', 'testController@f_welcome');
Route::get('dat-pro', 'testController@f_hello');
Route::get('dat-pro/{name?}','testController@f_name');
Route::group(['prefix' => 'du-lich'], function(){
	Route::get('mien-bac', function () { echo 'MB'; });
	Route::get('mien-trung', function () { echo 'MT'; });
	Route::get('mien-nam', function () { echo 'MN'; });
});

	
//Giao diện người dùng
Route::get('du-lich', 'testController@f_get_master'); 
Route::get('du-lich/trong-nuoc', 'testController@f_get_trong')->name('trong-nuoc'); 
Route::get('du-lich/nuoc-ngoai', 'testController@f_get_ngoai')->name('nuoc-ngoai'); 


//Admin
Route::get('admin', function(){
	return view('admin.admin');
})->name('admin');

//Admin quản lý tour
Route::get('admin/add-tour', 'AdminTourController@AddTour')->name('add-tour');
Route::post('admin/save-tour', 'AdminTourController@SaveTour')->name('save-tour');
Route::get('admin/manage-tour', 'AdminTourController@ManageTour')->name('manage-tour');
Route::get('admin/update-tour/{id}', 'AdminTourController@UpdateTour')->name('update-tour');
Route::post('admin/save-update-tour/{id}', 'AdminTourController@SaveUpdateTour')->name('save-update-tour');
Route::get('admin/delete-tour/{id}', 'AdminTourController@DeleteTour')->name('delete-tour');

//Admin quản lý tin tức
Route::get('admin/add-news', 'AdminNewsController@AddNews')->name('add-news');

//Gọi vào trang tour trong nước
Route::get('/du-lich/trong-nuoc/dbtest','Tour_Trong_Nuoc_controller@data_push');
