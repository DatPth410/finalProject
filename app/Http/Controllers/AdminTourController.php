<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminTourController extends Controller
{
    //
	public function AddTour(){
		$diemden=DB::table('tbl_diemden')
		->get();
		return view('admin.admin-add-tour',compact('diemden'));
	}

	public function SaveTour(Request $request){
		if ($request->isMethod('post')) {
    		# code...
    		// dd($request);
			
			echo $request->name;
			echo "\n";
			// return $request->all();
			$file_name= $request->file('avatar');
			$tmp=$file_name->getClientOriginalExtension();
            $new_name = rand().'.'.$file_name->getClientOriginalExtension();
            $file_name->move('img/test',$new_name);
            // return $tmp." and ".$new_name;

			$tourInsert=[];
			$tourInsert['name']=$request->get('name');
			$tourInsert['price']=$request->get('gia');
			$tourInsert['khuyen_mai']=$request->get('km');
			$tourInsert['code']=$request->get('code');
			$tourInsert['lich_trinh']=$request->get('lichtrinh');
			$tourInsert['length']=$request->get('songay');
			$tourInsert['departure']=$request->get('ngaykhoihanh');
			$tourInsert['noi_khoi_hanh']=$request->get('noikhoihanh');
			$tourInsert['vehicle']=$request->get('phuongtien');
			$tourInsert['so_cho']=$request->get('socho');
			$tourInsert['avatar']=$new_name;
			$tourInsert['sochodadat'] = 0;


			$tourInsert['luu_y']=$request->get('luuy');
			$diemden =  implode(' ', $request->get('diemden'));
			$tourInsert['diem_den']=$diemden;
			echo "\n";
			echo $diemden;

			DB::table('tour_trong_nuoc')->insert(
				$tourInsert
			);
			return redirect(route('manage-tour'));

		}
	}

	public function ManageTour(){
		$tours=DB::table('tour_trong_nuoc')->get();

		return view('admin.admin-manage-tour', compact('tours'));
	}

	public function UpdateTour($id){
		$tour = DB::table('tour_trong_nuoc')
        ->where('id',$id)
        ->first();
		return view('admin.admin-update-tour',compact('tour'));
	}

	public function SaveUpdateTour(Request $request,$id){
		if ($request->isMethod('post')) {
    		# code...
    		// dd($request);
			
			echo $request->name;
			echo "\n";
			// return $request->all();
			$file_name= $request->file('avatar');
			$tmp=$file_name->getClientOriginalExtension();
            $new_name = rand().'.'.$file_name->getClientOriginalExtension();
            $file_name->move('img/test',$new_name);
            // return $tmp." and ".$new_name;

			$tourInsert=[];
			$tourInsert['name']=$request->get('name');
			$tourInsert['price']=$request->get('gia');
			$tourInsert['code']=$request->get('code');
			$tourInsert['khuyen_mai']=$request->get('km');
			$tourInsert['lich_trinh']=$request->get('lichtrinh');
			$tourInsert['length']=$request->get('songay');
			$tourInsert['departure']=$request->get('ngaykhoihanh');
			$tourInsert['noi_khoi_hanh']=$request->get('noikhoihanh');
			$tourInsert['vehicle']=$request->get('phuongtien');
			$tourInsert['so_cho']=$request->get('socho');
			$tourInsert['avatar']=$new_name;
			$tourInsert['sochodadat'] = 0;


			// $tourInsert['luu_y']=$request->get('luuy');
			// $diemden =  implode(' ', $request->get('diemden'));
			$tourInsert['diem_den']=$request->get('diem_den');

			DB::table('tour_trong_nuoc')->where('id',$id)
                ->update($tourInsert);
			return redirect(route('manage-tour'));

		}
	}

	public function  DeleteTour($id){
//        List tour
        $res = DB::table('tour_trong_nuoc')
            ->where('id',$id)
            ->delete();
        return redirect(route('manage-tour'));
    }
   
}
