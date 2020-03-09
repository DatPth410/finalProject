<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminContactTourController extends Controller
{
    //
    public function ManageContact(){
    	$contacts=DB::table('tbl_lienhe')
    	->get();
    	return view('admin.admin-manage-contact',compact('contacts'));
    }

    public function ManageBooking(){
		$bookings=DB::table('tbl_detail_booking')
		->orderBy('time', 'desc')
    	->get();
    	return view('admin.admin-manage-booking',compact('bookings'));
	}
	
	public function UpdateBooking(Request $request,$id){
        $booking=DB::table('tbl_detail_booking')->where('id',$id)->first();
        return view('admin.admin-update-booking', compact('booking'));
    }

    public function SaveUpdateBooking(Request $request,$id){
        if ($request->isMethod('post')) {
            # code...
           

            $updateInsert = [];
            $updateInsert['id_status'] = $request->get('pay');
           
            
            DB::table('tbl_detail_booking')->where('id',$id)
                ->update($updateInsert);
            return redirect(route('manage-booking'));
        }
    }
}
