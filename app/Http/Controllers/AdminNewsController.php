<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class AdminNewsController extends Controller
{
    // 
    public function AddNews(){
    	return view('admin.admin-add-news');
    }

    public function SaveNews(Request $request){
    	if ($request->isMethod('post')) {
    		# code...

    		if($request->file('avatar')){
                $file_name= $request->file('avatar');
                $tmp=$file_name->getClientOriginalExtension();
                $new_name = rand().'.'.$file_name->getClientOriginalExtension();
                $file_name->move('img/test',$new_name);
            }

            $checkRules = [
                'tieude'=>'required|max:100',
                'tomtat'=>'required|max:250',
                'noidung'=>'required',
                'avatar'=>'required|image|mimes:jpeg,bmp,png,gif|max:2048',
            ];
            $messages = [
                'tieude.required' => 'Tiêu đề không được để trống!',
                'tieude.max' => 'Tiêu đề không được quá 100 ký tự!',
                'tomtat.required' => 'Tóm tắt không được để trống!',
                'tomtat.max' => 'Tóm tắt không được quá 250 ký tự!',
                'noidung.required' => 'Giá tour không được để trống!',
                'avatar.required' => 'Avatar không được để trống!',
                'avatar.image' => 'Avatar phải là file ảnh!',
                'avatar.mimes'=>'Ảnh phải có đuôi là jpg,png,gif,bmp',
            ];
            $resValidator = Validator::make($request->all(), $checkRules,$messages);

            if ($resValidator->fails()) {
                return redirect(route('add-news'))
                    ->withErrors($resValidator)
                    ->withInput();
            }

    		$newsInsert = [];
            $newsInsert['title'] = $request->get('tieude');
            $newsInsert['tom_tat'] = $request->get('tomtat');
            $newsInsert['noi_dung'] = $request->get('noidung');
            if (isset($new_name)) {
                $updateInsert['avatar'] = $new_name;
            }
            $newsInsert['ngay_dang'] = date("Y-m-d H:i:s");

            DB::table('tbl_news')->insert(
				$newsInsert
			);
			return redirect(route('manage-news'));
    	}
    }

    public function ManageNews(){
        $newss=DB::table('tbl_news')->get();

        return view('admin.admin-manage-news', compact('newss'));
    }

    public function UpdateNews(Request $request,$id){
        $news=DB::table('tbl_news')->where('id',$id)->first();
        return view('admin.admin-update-news', compact('news'));
    }

    public function SaveUpdateNews(Request $request,$id){
        if ($request->isMethod('post')) {
            # code...
            if($request->file('avatar')){
                $file_name= $request->file('avatar');
                $tmp=$file_name->getClientOriginalExtension();
                $new_name = rand().'.'.$file_name->getClientOriginalExtension();
                $file_name->move('img/test',$new_name);
            }
            $checkRules = [
                'name'=>'required|max:100',
                'tom_tat'=>'required|max:250',
                'noidung'=>'required',
                'avatar'=>'image'
            ];
            $messages = [
                'name.required' => 'Tiêu đề không được để trống!',
                'name.max' => 'Tiêu đề không được quá 100 ký tự!',
                'tom_tat.required' => 'Tóm tắt không được để trống!',
                'tom_tat.max' => 'Tóm tắt không được quá 250 ký tự!',
                'noidung.required' => 'Nội dung không được để trống!',
                'avatar.image' => 'Avatar phải là file ảnh!',
            ];
            $resValidator = Validator::make($request->all(), $checkRules,$messages);

            if ($resValidator->fails()) {
                return redirect(route('update-news',$id))
                    ->withErrors($resValidator)
                    ->withInput();
            }

            $updateInsert = [];
            $updateInsert['title'] = $request->get('name');
            $updateInsert['tom_tat'] = $request->get('tom_tat');
            $updateInsert['noi_dung'] = $request->get('noidung');
            if (isset($new_name)) {
                $updateInsert['avatar'] = $new_name;
            }
            DB::table('tbl_news')->where('id',$id)
                ->update($updateInsert);
            return redirect(route('manage-news'));
        }
    }

    public function DeleteNews($id){
        $res = DB::table('tbl_news')
            ->where('id',$id)
            ->delete();
        return redirect(route('manage-news'));
    }
}
