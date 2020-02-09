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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'testController@f_welcome');

// Route::get('dat-pro', function () {
//     echo 'Anh Đạt đẹp trai';
// });

// Route::get('dat-pro/bai2', function () {
//     echo 'Anh Đạt đẹp trai lan 2';
// });

Route::get('dat-pro', 'testController@f_hello');

// Route::get('dat-pro/{name}', function ($name) {
//     echo 'Xin chao:'.$name;
// });

// Route::get('dat-pro/{name}/{year}', function ($name, $year) {
//     echo 'Xin chao:'.$name.' vao nam '.$year;
// });

Route::get('dat-pro/{name?}','testController@f_name');

//dinh danh cho route
Route::get('trang-dich', function () {
    echo 'Day la trang dich';
})->name('dich');

Route::get('trang-nguon', function () {
    //echo 'Day la trang nguon';
    //return redirect()->route('dich');
    return redirect('du-lich/mien-bac');
}); 

Route::group(['prefix' => 'du-lich'], function(){
	Route::get('mien-bac', function () { echo 'MB'; });
	Route::get('mien-trung', function () { echo 'MT'; });
	Route::get('mien-nam', function () { echo 'MN'; });
});


Route::get('page-php', function () {
    //echo 'Day la trang nguon';
    //return redirect()->route('dich');
    $giatri=3;

    $giatri2='<b>Xin chào các bạn</b>';
    return view('php.page',['giatri1'=>$giatri, 'giatri2'=>$giatri2]);
}); 

Route::get('page-lar', function () {
    //echo 'Day la trang nguon';
    //return redirect()->route('dich');
    $giatri=3;

    $giatri2='<b>Xin chào các bạn</b>';
    return view('laravel.pagelaravel',['giatri1'=>$giatri, 'giatri2'=>$giatri2]);
}); 



Route::group(['prefix' => 'schema'], function(){
	Route::get('create-table', function () {
		Schema::create('test1', function($table){
			$table->increments('id');
			$table->string('email',20)->default('example@gmail.com');
			$table->string('password',20);
			$table->tinyInteger('level');
			$table->timestamps();
		}); 
	});
});

Route::group(['prefix' => 'query'], function(){
	Route::get('insert-data', function () {
		DB::table('test1')->insert([
			['email'=>'a@gmail.com','password'=>'1234','level'=>1],
			['email'=>'b@gmail.com','password'=>'1234','level'=>2],
			['email'=>'c@gmail.com','password'=>'1234','level'=>1],
		]);
	});

	Route::get('update-data', function () {
		DB::table('test1')->where('id','=',2)->update(['email'=>'fix@gmail.com','password'=>'1234','level'=>10]);
	});

	Route::get('delete-data', function () {
		DB::table('test1')->where('id','>',4)->delete();
	});

	Route::get('get', function () {
		$users=DB::table('test1')->get();
		dd($users);
	});

	Route::get('join', function () {
		$users=DB::table('test1')->join('test2','test1.level','=','test2.level')->select('email','name-level')->get();
		dd($users);
	});
});



	
//dulich
Route::get('du-lich', 'testController@f_get_master'); 
Route::get('du-lich/trong-nuoc', 'testController@f_get_trong')->name('trong-nuoc'); 
Route::get('du-lich/nuoc-ngoai', 'testController@f_get_ngoai')->name('nuoc-ngoai'); 
//admin
Route::get('admin', function(){
	return view('admin.admin');
})->name('admin');

Route::get('admin/add-tour', 'AdminTourController@AddTour')->name('add-tour');
Route::post('admin/save-tour', 'AdminTourController@SaveTour')->name('save-tour');
Route::get('admin/manage-tour', 'AdminTourController@ManageTour')->name('manage-tour');
Route::get('admin/update-tour/{id}', 'AdminTourController@UpdateTour')->name('update-tour');
Route::post('admin/save-update-tour/{id}', 'AdminTourController@SaveUpdateTour')->name('save-update-tour');
Route::get('admin/delete-tour/{id}', 'AdminTourController@DeleteTour')->name('delete-tour');



Route::get('admin/add-news', 'AdminNewsController@AddNews')->name('add-news');
