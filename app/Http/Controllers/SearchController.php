<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
	public function saveSearch(Request $request){
		if ($request->isMethod('post')) {
    		# code...
    		//xử lý điểm đến và điểm khởi hành
			if (is_null($request->name)) {
    			# code...
				$name="%";
			}else{
				$name=$request->name;
			}

			

			$price=$request->price;
			if ($price==1) {
    				# code...
				$min=0;
				$max=5000000;
			}elseif ($price==2) {
    				# code...
				$min=5000000;
				$max=15000000;
			}elseif ($price==3){
				$min=15000000;
				$max=100000000;
			}else{
				$min=0;
				$max=100000000;
			}

			if (is_null($request->arrived)) {
    			# code...
				$arrived="%";
				$id_diemden=null;
			}else{
				$arrived=$request->arrived;
				$list_diemden=DB::table('tbl_diemden')
			->where('ten','like',$arrived)
			->get();
			
			foreach ($list_diemden as $key => $value) {
			# code...
				$id_diemden=$value->id;

			}
			}

			
			// $list_tour_diemden=DB::table('tour_trong_nuoc')
			// ->where('diem_den','like','%'.strval($id_diemden).'%')
			// ->get();

			if (is_null($request->date)) {
    			# code...
    			if (is_null($id_diemden)) {
    				# code...
    				$list_tour=DB::table('tour_trong_nuoc')
				->where('noi_khoi_hanh','like',$name)
				->where('price','>',$min)
				->where('price','<',$max)
				->get();
    			}
				$list_tour=DB::table('tour_trong_nuoc')
				->where('diem_den','like','%'.strval($id_diemden).'%')
				->where('noi_khoi_hanh','like',$name)
				->where('price','>',$min)
				->where('price','<',$max)
				->get();
			}else{
				$time=$request->date;
				if (is_null($id_diemden)) {
    				# code...
    				$list_tour=DB::table('tour_trong_nuoc')
				->where('noi_khoi_hanh','like',$name)
				->where('price','>',$min)
				->where('price','<',$max)
				->where('departure','=',$time)
				->get();
    			}
				$list_tour=DB::table('tour_trong_nuoc')
				->where('diem_den','like','%'.strval($id_diemden).'%')
				->where('noi_khoi_hanh','like',$name)
				->where('price','>',$min)
				->where('price','<',$max)
				->where('departure','=',$time)
				->get();
			}
		}
		return view('front-end.search_result',compact('list_tour','name','arrived','price','id_diemden'));
	}
}

