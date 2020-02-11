<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminNewsController extends Controller
{
    // 
    public function AddNews(){
    	return view('admin.admin-add-news');
    }

    public function SaveNews(Request $request){
    	if ($request->isMethod('post')) {
    		# code...

    		$file_name= $request->file('avatar');
			$tmp=$file_name->getClientOriginalExtension();
            $new_name = rand().'.'.$file_name->getClientOriginalExtension();
            $file_name->move('img/test',$new_name);

    		$newsInsert = [];
            $newsInsert['title'] = $request->get('tieude');
            $newsInsert['tom_tat'] = $request->get('tomtat');
            $newsInsert['noi_dung'] = $request->get('noidung');
            $newsInsert['avatar'] = $new_name;
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
            $file_name= $request->file('avatar');
            $tmp=$file_name->getClientOriginalExtension();
            $new_name = rand().'.'.$file_name->getClientOriginalExtension();
            $file_name->move('img/test',$new_name);

            $updateInsert = [];
            $updateInsert['title'] = $request->get('name');
            $updateInsert['tom_tat'] = $request->get('tom_tat');
            $updateInsert['noi_dung'] = $request->get('noidung');
            $updateInsert['avatar'] = $new_name;
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
