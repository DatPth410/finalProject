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
}
