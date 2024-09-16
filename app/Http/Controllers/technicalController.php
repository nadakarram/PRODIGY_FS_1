<?php

namespace App\Http\Controllers;

use App\Models\technical;
use Illuminate\Http\Request;

class technicalController extends Controller
{
    function technicallogin(){
        return view("pages.technicallogin");
    }
    function technicallogincheck(Request $request) {
        $data = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);
      
        $technical = technical::where("email", $request->email)->first();
    //    return response($technical);
        if ($technical) {
            if ($request->password=== $technical->password) {
                $request->session()->put(["technicalid"=>$technical->id,"loginid"=> $technical->id]);
                return  redirect("/");

            } else {
                return back()->with("password_faild", "invaild password");
            }

        } else {
            return back()->with("email_faild", "invaild email");

        }
        
    }
}
