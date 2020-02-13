<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function userDemo(){
    	return view('user');
    }

    public function adminDemo(){
    	return view('admin.admin');
    }

    public function permissionDenied(){
    	return view('nopermission');
    }
}
