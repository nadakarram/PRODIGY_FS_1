<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\technical;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
class userController extends Controller
{
    function login_page_display(){
        return view("pages.loginpage");
    }
    function signup_page_display(){
        return view("pages.signuppage");
    } 
    function regester(Request $request){

        if($request->work_for!="other"){

            $request->validate([
                "name" => "required|string|max:255",
                "phone_number" => "required|string|size:11|unique:users",
                "email" => "required|string|email|max:255|unique:users",
                "password" => "required|string",
                "work_for"=>"required|string|in:company,own busniss,other",
               'company_name'=>"required|string|max:60",
                "user_adress"=>"required|string|max:400",
                "photo"=>"required"
            ]);
            
        }else{
        $request->validate([
            "name" => "required|string|max:255",
            "phone_number" => "required|string|size:11|unique:users",
            "email" => "required|string|email|max:255|unique:users",
            "password" => "required|string",
            "work_for"=>"required|string|in:company,own busniss,other",
            "photo"=>"required",
            "user_adress"=>"required|string|max:400"
        ]);}
        $filename=time().".".$request->file("photo")->getClientOriginalExtension();
        $path=$request->file("photo")->storeAs("images",$filename,"public");
        $request->photo="/storage/".$path;
        User::insert([
            "name"=>$request->name,
           
            "phone_number" => $request->phone_number,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "work_for"=>$request->work_for,
            "company_name"=>$request->company_name,
            "user_adress"=>$request->user_adress,
            "photo"=>$request->photo

        ]);
        return redirect("/");

    }
    function logincheck(Request $request)  {
        $data = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);
        $user = User::where("email", $request->email)->first();
        if($user){
            if (hash::check($request->password, $user->password)) {
                $request->session()->put("loginid", $user->id);
                
                return redirect("/");

            } else {
                return back()->with("password_faild", "invaild password");
            }
        }else {
            return back()->with("email_faild", "invaild email");

        }
        
    }
    function logout(Request $request)
    {
        if (Session::has("loginid")) {
            if(Session::has("loginAdminid")){
                Session::pull("loginAdminid");
            }elseif(Session::has("technicalid")){
                Session::pull("technicalid");
            }
            Session::pull("loginid");
            return redirect("/");
        }


    }
    function profile(){
        if(Session::has("loginAdminid")){
            $user=admin::where("id",Session::get("loginAdminid"))->first();
            return view("pages.profile")->with("user",$user);
        }elseif(Session::has("technicalid")){
            $user=technical::where("id",Session::get("technicalid"))->first();
            return view("pages.profile")->with("user",$user);
        }else{
            $user=User::where("id",Session::get("loginid"))->first();
            return view("pages.profile")->with("user",$user);
        }
    }
    function chage(){
        return view("pages.home");
    }
    function changephoto(Request $request)  {
        return response('poo');
        // $filename=time().".".$request->file("photo")->getClientOriginalExtension();
        // $path=$request->file("photo")->storeAs("images",$filename,"public");
        // $request->photo="/storage/".$path;
        // $request->validate(["photo"=>"required"]);

        // if(Session::has("loginAdminid")){
        //     return response('poo1');
        //     admin::where("id",Session::get("loginAdminid"))->update(["photo"=>$request->photo]);
        // }elseif(Session::has("technicalid")){
        //     return response('poo2');
        //     technical::where("id",Session::get("technicalid"))->update(["photo"=>$request->photo]);
         
        
        // }else{
        //     return response('poo');
        //     User::where("id",Session::get("loginid"))->update(["photo"=>$request->photo]);

           
        // }
        
    }
}



