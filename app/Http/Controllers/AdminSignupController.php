<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminSignup;

class AdminSignupController extends Controller
{
    public function index(){
        return view('adminpanel\adminsigup');
    }
    public function admin_data_store(Request $request){
        print_r($request->all());
        $admin_info= new AdminSignup;
        $admin_info->name= $request['Name'];
        $admin_info->phone= $request['phone_number'];
        $admin_info->username= $request['username'];
        $admin_info->email= $request['email'];
        $admin_info->password= md5($request['password']);
        $admin_info->reference_code= $request['ref_code_gen'];
        $admin_info->save();

        



}

    }
