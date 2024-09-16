<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\feild;
use Exception;
use Illuminate\Http\Request;

class feildsController extends Controller
{
    //
    function show_home(){
        $feilds=feild::all();
        return view("pages.home")->with("feilds",$feilds);

    }
    function show_feilds(){
        $feilds=feild::get(["id","name","photo","state"]);
        return view("dashbourd.servies.servies")->with("feilds",$feilds);
    }
    function show_form_add()  {
        $cat=category::get();

        return view("dashbourd.servies.serviesAdd")->with("categorys",$cat);
        
    }
    function show_form_edit($id)  {
        $feilddata=feild::where("id",$id)->first();
        $cat=category::get();

        return view("dashbourd.servies.serviesEdit")->with(["id"=>$id,"feilddata"=>$feilddata,"categorys"=>$cat]);
        
    }
    function addFeild(Request $request) {

        $request->validate([
            
            "name" => "required|string|max:255",
            "state"=>"required|string",
            "desc"=>"required|string",
            "photo"=>"required",
            "category_id"=>"required"
            
        ]);
        $filename=time().".".$request->file("photo")->getClientOriginalExtension();
        $path=$request->file("photo")->storeAs("images",$filename,"public");
        $request->photo="/storage/".$path;
        feild::insert([
            "name"=>$request->name,
           
            "state"=>$request->state,
            "desc"=>$request->desc,
            "photo"=>$request->photo,
            "category_id"=>$request->category_id,
            "created_at"=>now()

        ]);
        return redirect("/servies");

        
    }
    function editFeild(Request $request,$id) {
        $request->validate([
            
            "name" => "required|string|max:255",
            "state"=>"required|string",
            "desc"=>"required|string",
            "photo"=>"required",
            "category_id"=>"required",
            
        ]);
        $filename=time().".".$request->file("photo")->getClientOriginalExtension();
        $path=$request->file("photo")->storeAs("images",$filename,"public");
        $request->photo="/storage/".$path;
        feild::find($id)->update([
            "name"=>$request->name,
           
            "state"=>$request->state,
            "desc"=>$request->desc,
            "photo"=>$request->photo,
            "category_id"=>$request->category_id 
            

        ]);
        return redirect("/servies");

        
    }
    function DeleteFeild(Request $request,$id) {
       try{
        feild::findOrFail($id)->delete();
       }catch(Exception $e){
        return response("error");
       }
        
        return redirect("/servies");

        
    }
}
