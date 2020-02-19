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
        $j=0;
        foreach ($tour as $key => $tour_value) {
            $tour_code_id[$j]=$tour_value->id;
            $j++;
        }
        return view('front-end.tour_trong_nuoc', compact('tour','destination_id_array','destination_name_array','tour_code_id'));
    }

    public function viewInlandwithDestination($code_diem_den){
        $i=0;
        $j=0;
        $k=0;
        $tour=DB::table('tour_trong_nuoc')->get();
        $destination=DB::table('tbl_diemden')->get();
        $destination_code_id=$destination_code_name="";
        $tour_code_id=array();
        $destination_id_array=array();
        $destination_name_array=array();
        foreach ($destination as $key => $destination) {
            if ($code_diem_den == $destination->code) {
                $destination_code_id=$destination->id;
                $destination_code_name=$destination->ten;
            }
            $destination_id_array[$j]=$destination->id;
            $destination_name_array[$j]=$destination->ten;
            $j++;
        }
        foreach ($tour as $key => $tour_value) {
            $diem_den=(array)$tour_value;
            $des=explode(" ", $diem_den['diem_den']);
            for ($i=0; $i < count($des) ; $i++) { 
                if ($destination_code_id == $des[$i]) {
                    $tour_code_id[$k]=$tour_value->id;
                    $k++;
                }
            }
        }
        return view('front-end.tour_trong_nuoc', compact('tour','destination_id_array','destination_name_array','tour_code_id'));
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

<<<<<<< HEAD
=======
    public function viewDetail(){
        
        return view('front-end.detail');
    }    

    public function viewTintuc(){
        
        return view('front-end.tin_tuc');
    }       
>>>>>>> 57ee19dec76d26e86a77ae9c8cc70328e1f9a8dc
}
