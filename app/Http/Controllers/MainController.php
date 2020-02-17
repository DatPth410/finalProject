<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MainController extends Controller
{
    public function viewHome(){
        $data=DB::table('tbl_diemden')
        ->select('ten')->get();
        $data_array=array();
        foreach ($data as $key => $value) {
            $data_array[]=$value->ten;
        }
        $data_array1=array();
    	return view('front-end.index',compact('data_array'));
    }

    public function viewSale(){
    	return view('front-end.sale');
    }

    //START controller tour trong nuoc

   	public function viewInland(){
        $i=0;
        $j=0;
        $tour=DB::table('tour_trong_nuoc')->get();
        $destination=DB::table('tbl_diemden')->get();
        $destination_id_array=array();
        $destination_name_array=array();
        foreach ($destination as $key => $destination) {
            $destination_id_array[$j]=$destination->id;
            $destination_name_array[$j]=$destination->ten;
            $j++;
        }
        return view('front-end.tour_trong_nuoc', compact('tour','destination_id_array','destination_name_array'));
        // $diem_den=(array)$tour;
        // $des=explode(" ", $diem_den['diem_den']);
        //$array="Tuan bros dep trai";
        //$des=explode(" ",$array);
        //print_r($des);
    }

    public function viewInlandwithDestination($code_diem_den){
        $i=0;
        $j=0;
        $tour=DB::table('tour_trong_nuoc')->get();
        $destination=DB::table('tbl_diemden')->get();
        $destination_id_array=array();
        $destination_name_array=array();
        foreach ($destination as $key => $destination) {
            if ($code_diem_den==$destination->code) {
                $destination_id_array[$j]=$destination->id;
                $destination_name_array[$j]=$destination->ten;
                $j++;
            }
        }
        return view('front-end.tour_trong_nuoc', compact('tour','destination_id_array','destination_name_array'));
        //echo $code_diem_den;
    }


    //END controller tour trong nuoc

    public function viewAboutUs(){
    	return view('front-end.aboutus');
    } 

    public function viewExp(){
        $exp = DB::table('tbl_news')->get();
        //print_r($exp);
    	return view('front-end.cam_nang',compact('exp'));
        //return view('front-end.cam_nang');
    }

    public function viewOutland(){
    	
        return view('front-end.tour_nuoc_ngoai');
    }
}
