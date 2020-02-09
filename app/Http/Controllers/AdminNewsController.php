<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    // 
    public function AddNews(){
    	return view('admin.admin-add-news');
    }
}
