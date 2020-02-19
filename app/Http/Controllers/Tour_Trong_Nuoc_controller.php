<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Tour_Trong_Nuoc_controller extends Controller
{
    public function data_push()
    {

    	$tour=DB::table('tour_trong_nuoc')->get();
    	return view('front-end.tour_trong_nuoc', compact('tour'));
	}
	 public function PaginationTour()
	 {
    	
    	
}
