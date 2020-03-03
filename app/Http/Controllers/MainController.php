<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Mail\SendMail;
use Mail;
class MainController extends Controller
{
    public function viewHome(){
        $date = date('Y-m-d', time());
        $data=DB::table('tbl_diemden')
        ->select('ten')->get();
        $data_array=array();
        foreach ($data as $key => $value) {
            $data_array[]=$value->ten;
        }
        $data_array1=array();

        $sale_tour=DB::table('tour_trong_nuoc')
        ->orderBy('khuyen_mai','desc')
        ->whereDate('departure','>',$date)
        ->limit(3)
        ->get();

        $six_tours=DB::table('tour_trong_nuoc')
        ->whereDate('departure','>',$date)
        ->inRandomOrder()
        ->limit(6)
        ->get();

        $four_news=DB::table('tbl_news')
        ->where('id','!=',1)
        ->limit(2)
        ->get();

        return view('front-end.index1',compact('data_array','sale_tour','six_tours','four_news'));
    }

    public function viewTest(){
        $date = date('Y-m-d', time());
        $data=DB::table('tbl_diemden')
        ->select('ten')->get();
        $data_array=array();
        foreach ($data as $key => $value) {
            $data_array[]=$value->ten;
        }
        $data_array1=array();

        $sale_tour=DB::table('tour_trong_nuoc')
        ->whereDate('departure','>',$date)
        ->orderBy('khuyen_mai','desc')
        ->limit(3)
        ->get();

        $six_tours=DB::table('tour_trong_nuoc')
        ->whereDate('departure','>',$date)
        ->inRandomOrder()
        ->limit(6)
        ->get();

        $four_news=DB::table('tbl_news')
        ->where('id','!=',1)
        ->limit(2)
        ->get();

        return view('front-end.index1',compact('data_array','sale_tour','six_tours','four_news'));
    }

    

    //START controller tour trong nuoc

    public function viewInland(){
        $date = date('Y-m-d', time());
        $i=0;
        $j=0;
        $tour=DB::table('tour_trong_nuoc') ->whereDate('departure','>',$date)->get(); 
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
        // print_r($tours);
        return view('front-end.tour_trong_nuoc', compact('tour','destination_id_array','destination_name_array','tour_code_id'));
    }

    public function viewInlandwithDestination($code_diem_den){
        $date = date('Y-m-d', time());
        $i=0;
        $j=0;
        $k=0;
        $tour=DB::table('tour_trong_nuoc')->whereDate('departure','>',$date)->get();
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
        $exp = DB::table('tbl_news')->paginate(4);
        //print_r($exp);
        $exp_news = DB::table('tbl_news')
        ->orderBy('ngay_dang','desc')
        ->limit(6)
        ->get();
        return view('front-end.cam_nang1',compact('exp','exp_news'));
        //return view('front-end.cam_nang');
    }

    public function viewOutland(){
    	
        return view('front-end.tour_nuoc_ngoai');
    }

    public function viewTintuc(Request $request){
        $id=$request->query('id');
        $news=DB::table('tbl_news')
        ->where('id',$id)
        ->first();
        $exp_news = DB::table('tbl_news')
        ->orderBy('ngay_dang','desc')
        ->limit(6)
        ->get();
        $lienquan=DB::table('tbl_news')
        ->inRandomOrder()
        ->limit(3)
        ->get();
        $date = date('Y-m-d', time());
        $tour=DB::table('tour_trong_nuoc')
        ->whereDate('departure','>',$date)
        ->inRandomOrder()
        ->first();
        return view('front-end.tin_tuc',compact('news','lienquan','tour','exp_news'));
    }

    public function tourDetail($id){
        $detail = DB::table('tour_trong_nuoc')
        ->where('id','=',$id)
        ->first();
        $date = date('Y-m-d', time());
        $random_tour=DB::table('tour_trong_nuoc')
        ->whereDate('departure','>',$date)
        ->inRandomOrder()
        ->limit(3)
        ->get();
        return view('front-end.detail',compact('detail','random_tour'));
        
    }       

    public function saveContact(Request $request){
        if ($request->isMethod('post')) {
            # code...
            echo "ok";
            $contactInsert=[];
            $contactInsert['name'] = $request->get('name');
            $contactInsert['phone'] = $request->get('phone');
            if (is_null($request->get('question'))) {
                # code...
                $question="Không có câu hỏi";
            }else{
                $question = $request->get('question');
            }
            $contactInsert['question'] = $question;
            DB::table('tbl_lienhe')->insert($contactInsert);       
        }
        return redirect()->route('trang-chu');
    }


    //Lưu data đặt tour
    public function storeBookingtour(Request $request){
        if ($request->isMethod('post')) {
            $detailBooking=[];
            $detailBooking['name'] = $request->get('name');
            $detailBooking['phone'] = $request->get('phone');
            $detailBooking['email'] = $request->get('email');
            $detailBooking['note'] = $request->get('note');
            $detailBooking['id_tour'] = $request->get('id_tour');
            $detailBooking['pay'] = $request->get('pay');
            $detailBooking['adult_number'] = $request->get('adult');
            $detailBooking['child_number'] = $request->get('child');
            $detailBooking['total_price'] = $request->get('total_price');
            $detailBooking['id_status'] = 1;
            if (isset($request->user()->id)) {
                $detailBooking['id_user'] = $request->user()->id;
            }else{
                $detailBooking['id_user'] = 3;
            }
            // $detailBooking['id_user']=1;
            $detailBooking['time'] = date('Y-m-d H:i:s');
            DB::table('tbl_detail_booking')->insertGetId($detailBooking);
        }
        $detail = DB::table('tour_trong_nuoc')
        ->where('id','=',$request->get('id_tour'))
        ->first();
        // $details = [
        //     'title' => 'Title: Mail from DPV',
        //     'body' => 'Body: Xác nhận đơn hàng!',
        //     'gia' => $request->get('total_price')
        // ];

        // \Mail::to('datpth0410@gmail.com')->send(new SendMail($details));


        $details = array(
            'title' => 'Xác nhận đặt hàng',
            'body' => 'abc',
            'name' => $request->get('name'),
            'tour' => $detail->name,
            'adult' => $request->get('adult'),
            'child' => $request->get('child'),
            'gia' => $request->get('total_price'),
            'length' => $detail->length,
            'vehicle' => $detail->vehicle,
            'departure' => $detail->departure,

        );
        $_SESSION['mail']=$request->get('email');
        
        Mail::send('front-end.mail_content', $details, function ($message) {
            $message->to($_SESSION['mail'], 'Dat Pham');
            $message->subject('Xác nhận đặt hàng');
        });
        

        return redirect('trang-chu?success=1');
        

        //return redirect()->action("MailController@mailsend", [$request]);
    }

    public function ratingStore(Request $request){
        if ($request->isMethod('post')) {
            $ratingInsert=[];
            $ratingInsert['rating'] = $request->input('rating')+1;
            $ratingInsert['time'] = date('Y-m-d H:i:s');
            $ratingInsert['id_user'] = $request->user()->id;
            $ratingInsert['id_tour'] = $request->input('id_tour');
            DB::table('tbl_rating')->insert($ratingInsert);       
        }
        return redirect()->route('user-manage-tour');

    }

    

}