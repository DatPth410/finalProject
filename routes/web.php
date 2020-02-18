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



Route::get('/', function(){
	return redirect()->route('trang-chu');
});
Route::get('dat-pro', 'testController@f_hello');
Route::get('dat-pro/{name?}','testController@f_name');
Route::group(['prefix' => 'du-lich'], function(){
	Route::get('mien-bac', function () { echo 'MB'; });
	Route::get('mien-trung', function () { echo 'MT'; });
	Route::get('mien-nam', function () { echo 'MN'; });
});

//Login
Route::group(['middleware'=>['auth']], function(){
	Route::get('/user', 'DemoController@userDemo')->name('user');
	Route::get('/permission-denied', 'DemoController@permissionDenied')->name('nopermission');
	Route::group(['middleware'=>['admin']], function(){
		Route::get('/admin', 'DemoController@adminDemo')->name('admin');
		Route::get('admin/add-tour', 'AdminTourController@AddTour')->name('add-tour');
		Route::post('admin/save-tour', 'AdminTourController@SaveTour')->name('save-tour');
		Route::get('admin/manage-tour', 'AdminTourController@ManageTour')->name('manage-tour');
		Route::get('admin/update-tour/{id}', 'AdminTourController@UpdateTour')->name('update-tour');
		Route::post('admin/save-update-tour/{id}', 'AdminTourController@SaveUpdateTour')->name('save-update-tour');
		Route::get('admin/delete-tour/{id}', 'AdminTourController@DeleteTour')->name('delete-tour');

//Admin quản lý tin tức
		Route::get('admin/add-news', 'AdminNewsController@AddNews')->name('add-news');
		Route::post('admin/save-news', 'AdminNewsController@SaveNews')->name('save-news');
		Route::get('admin/manage-news', 'AdminNewsController@ManageNews')->name('manage-news');
		Route::get('admin/update-news/{id}', 'AdminNewsController@UpdateNews')->name('update-news');
		Route::post('admin/save-update-news/{id}', 'AdminNewsController@SaveUpdateNews')->name('save-update-news');
		Route::get('admin/delete-news/{id}', 'AdminNewsController@DeleteNews')->name('delete-news');
	});
});

//Admin
// Route::get('admin', function(){
// 	return view('admin.admin');
// })->name('admin');

//Admin quản lý tour


//tour trong nước
Route::get('/trong-nuoc','MainController@viewInland')->name('trong-nuoc');
Route::get('/trong-nuoc/{code_diem_den?}', ['uses' =>'MainController@viewInlandwithDestination', 'as'=>'trong-nuoc/$code_diem_den']);


//trang chủ 
Route::get('/trang-chu','MainController@viewHome')->name('trang-chu');

Route::post('/save-search', 'SearchController@saveSearch')->name('save-find');

//Combo - Khuyến mại
Route::get('/khuyen-mai','MainController@viewSale');

//Tour nước ngoài
Route::get('/nuoc-ngoai','MainController@viewOutland')->name('nuoc-ngoai');

//Về chúng tôi
Route::get('/ve-chung-toi','MainController@viewAboutUs');

//Cẩm nang du lịch
Route::get('/cam_nang','MainController@viewExp');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Trang chi tiết 
Route::get('/detail', 'MainController@viewDetail');

