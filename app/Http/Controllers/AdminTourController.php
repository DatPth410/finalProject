<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
			if($request->file('avatar')){
                $file_name= $request->file('avatar');
                $tmp=$file_name->getClientOriginalExtension();
                $new_name = rand().'.'.$file_name->getClientOriginalExtension();
                $file_name->move('img/test',$new_name);
            }
            // return $tmp." and ".$new_name;
			$checkRules = [
                'name'=>'required|max:50',
                'gia'=>'required|numeric',
                'km'=>'required|integer|max:99',
                'code'=>'required|max:10',
                'lichtrinh'=>'required',
                'songay'=>'required|integer|max:99',
                'ngaykhoihanh'=>'required',
                'noikhoihanh'=>'required|max:50',
                'phuongtien'=>'required|max:15',
                'socho'=>'required|integer|max:99',
                'luuy'=>'required',
                'avatar'=>'required|image',
                'diem_den'=>'required|max:10',
            ];
            $messages = [
                'name.required' => 'Tên tour không được để trống!',
                'name.max' => 'Tên tour không được quá 50 ký tự!',
                'gia.required' => 'Giá tour không được để trống!',
                'km.required' => 'Khuyến mãi không được để trống!',
                'km.integer' => 'Khuyến mãi phải là số nguyên!',
                'khuyen_mai.max' => 'Khuyến mãi không được quá 99!',
                'code.required' => 'Mã không được để trống!',
                'code.max' => 'Mã không được quá 10 số!',
                'luuy.required' => 'Lưu ý không được để trống!',
                'lichtrinh.required' => 'Lịch trình không được để trống!',
                'songay.required' => 'Số ngày không được để trống!',
                'songay.integer' => 'Số ngày phải là số nguyên!',
                'songay.max' => 'Số ngày không được quá 99!',
                'ngaykhoihanh.required' => 'Ngày khởi hành không được để trống!',
                'noikhoihanh.required' => 'Nơi khởi hành không được để trống!',
                'noikhoihanh.max' => 'Nơi khởi hành không được quá 50 ký tự!',
                'phuongtien.required' => 'Phương tiện không được để trống!',
				'phuongtien.max' => 'Phương tiện không được quá 15 ký tự!',
                'socho.required' => 'Số chỗ không được để trống!',
                'socho.integer' => 'Số chỗ phải là số nguyên!',
                'socho.max' => 'Số chỗ không được quá 99!',
                'luuy.required' => 'Lưu ý không được để trống!',
                'avatar.required' => 'Avatar không được để trống!',
                'avatar.image' => 'Avatar phải là file ảnh!',
                'diem_den.required' => 'Điểm đến không được để trống!',
                'diem_den.max' => 'Điểm đến không được để quá 10 ký tự!',
            ];
            $resValidator = Validator::make($request->all(), $checkRules,$messages);
            if ($resValidator->fails()) {
                return redirect(route('add-tour'))
                    ->withErrors($resValidator)
                    ->withInput();
            }

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
			if (isset($new_name)) {
                $updateInsert['avatar'] = $new_name;
            }
			$tourInsert['sochodadat'] = 0;


			$tourInsert['luu_y']=$request->get('luuy');
			$diemden =  implode(' ', $request->get('diem_den'));
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
			if($request->file('avatar')){
                $file_name= $request->file('avatar');
                $tmp=$file_name->getClientOriginalExtension();
                $new_name = rand().'.'.$file_name->getClientOriginalExtension();
                $file_name->move('img/test',$new_name);
            }
            // return $tmp." and ".$new_name;

            $checkRules = [
                'name'=>'required|max:50',
                'gia'=>'required|numeric',
                'km'=>'required|integer|max:99',
                'code'=>'required|max:10',
                'lichtrinh'=>'required',
                'songay'=>'required|integer|max:99',
                'ngaykhoihanh'=>'required',
                'noikhoihanh'=>'required|max:50',
                'phuongtien'=>'required|max:15',
                'socho'=>'required|integer|max:99',
                'luuy'=>'required',
                'avatar'=>'image',
                'diem_den'=>'required|max:10',
            ];
            $messages = [
                'name.required' => 'Tên tour không được để trống!',
                'name.max' => 'Tên tour không được quá 50 ký tự!',
                'gia.required' => 'Giá tour không được để trống!',
                'km.required' => 'Khuyến mãi không được để trống!',
                'km.integer' => 'Khuyến mãi phải là số nguyên!',
                'khuyen_mai.max' => 'Khuyến mãi không được quá 99!',
                'code.required' => 'Mã không được để trống!',
                'code.max' => 'Mã không được quá 10 số!',
                'luuy.required' => 'Lưu ý không được để trống!',
                'lichtrinh.required' => 'Lịch trình không được để trống!',
                'songay.required' => 'Số ngày không được để trống!',
                'songay.integer' => 'Số ngày phải là số nguyên!',
                'songay.max' => 'Số ngày không được quá 99!',
                'ngaykhoihanh.required' => 'Ngày khởi hành không được để trống!',
                'noikhoihanh.required' => 'Nơi khởi hành không được để trống!',
                'noikhoihanh.max' => 'Nơi khởi hành không được quá 50 ký tự!',
                'phuongtien.required' => 'Phương tiện không được để trống!',
                'phuongtien.max' => 'Phương tiện không được quá 15 ký tự!',
                'socho.required' => 'Số chỗ không được để trống!',
                'socho.integer' => 'Số chỗ phải là số nguyên!',
                'socho.max' => 'Số chỗ không được quá 99!',
                'luuy.required' => 'Lưu ý không được để trống!',
                'avatar.image' => 'Avatar phải là file ảnh!',
                'diem_den.required' => 'Điểm đến không được để trống!',
                'diem_den.max' => 'Điểm đến không được để quá 10 ký tự!',
            ];
            $resValidator = Validator::make($request->all(), $checkRules,$messages);
            if ($resValidator->fails()) {
                return redirect(route('update-tour',$id))
                    ->withErrors($resValidator)
                    ->withInput();
            }

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
			if (isset($new_name)) {
                $updateInsert['avatar'] = $new_name;
            }
			$tourInsert['sochodadat'] = 0;


			$tourInsert['luu_y']=$request->get('luuy');
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
