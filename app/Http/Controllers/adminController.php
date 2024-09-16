<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class adminController extends Controller
{
    function adminlogin(){
        return view("pages.adminlogin");
    }
    function adminlogincheck(Request $request) {
        $data = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);
      
        $admin = admin::where("email", $request->email)->first();
    //    return response($admin);
        if ($admin) {
            if ($request->password=== $admin->password) {
                $request->session()->put(["loginAdminid"=>$admin->id,"loginid"=> $admin->id]);
                return  redirect("/");

            } else {
                return back()->with("password_faild", "invaild password");
            }

        } else {
            return back()->with("email_faild", "invaild email");

        }
        
    }
    function dashbourd(){
        return view("dashbourd.index");
    }
}
