<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function viewHome(){
    	return view('front-end.index');
    }

    public function viewSale(){
    	return view('front-end.sale');
    }

   	public function viewInland(){
    	
        $tour=DB::table('tour_trong_nuoc')->get();
        return view('front-end.tour_trong_nuoc', compact('tour'));
    }    

    public function viewAboutUs(){
    	return view('front-end.aboutus');
    } 

    public function viewExp(){
    	return view('front-end.cam_nang');
    }

    public function viewOutland(){
    	
        return view('front-end.tour_nuoc_ngoai');
    }
}
