<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    //
    public function userDemo(){
    	return view('user');
    }

    public function adminDemo(){
    	return view('admin.admin');
    }

    public function permissionDenied(){
    	return view('nopermission');
    }

    public function userManageTour(){
        $id=Auth::id();
        $bookings=DB::table('tbl_detail_booking')
        ->where('id_user','=',$id)
        ->get();

        return view('user.user-manage-tour',compact('bookings'));
    }
}
