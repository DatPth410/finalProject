<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viewHome(){
    	return view('front-end.index');
    }

    public function viewSale(){
    	return view('front-end.sale');
    }

   	// public function viewInland(){
    // 	return view('front-end.tour_trong_nuoc');
    // }    

    public function viewInland(){
    	return view('front-end.tour_nuoc_ngoai');
    } 

    public function viewAboutUs(){
    	return view('front-end.aboutus');
    } 

    public function viewExp(){
    	return view('front-end.cam_nang');
    }
}
