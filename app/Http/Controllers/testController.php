<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class testController extends Controller
{
    //
    public function f_welcome () {
    	return view('welcome');
	}
	public function f_hello () {
    	echo 'Anh Đạt đẹp trai';
	}

	public function f_name ($name='Pham Thanh Dat') {
    	echo 'Xin chao:'.$name;
	}

	public function f_get_master(){
		return view('master');
	}

	public function f_get_trong(){
		$tour = DB::table('tour_trong_nuoc')->where('id','=',1)->get();
		return view('front-end.tour_trong_nuoc',compact('tour'));
	}

	public function f_get_ngoai(){
		return view('front-end.tour_nuoc_ngoai');
	}
}
