<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\SendMail;

class MailController extends Controller
{
    //
    public function mailsend()
    {
        $details = [
            'title' => 'Title: Mail from DPV',
            'body' => 'Body: Xác nhận đơn hàng!',
        ];

        \Mail::to('datpth0410@gmail.com')->send(new SendMail($details));
        return redirect(route('trang-chu'));
    }
}
