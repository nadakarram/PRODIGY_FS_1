<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
   function show(){
    $cat=category::get();
    return view("dashbourd.category.category")->with("categories",$cat);
   }
   function showadd()  {
    
    return view("dashbourd.category.add");
    
   }
   function showedit($id)  {
    $catname=category::where("id",$id)->first();
    return view("dashbourd.category.edit")->with(["id"=>$id,"catname"=>$catname]);
    
   }
   function add(Request $request)  {
    $request->validate(["name"=>"required|string"]);
    category::insert([
        "name"=>$request->name,
        "created_at"=>now()
    ]);
    return redirect("/category");
    
   }
   function delete(Request $request,$id)  {
   
    category::findOrFail($id)->delete();
    return redirect("/category");
    
   }
   function edit(Request $request,$id)  {
    $request->validate(["name"=>"required|string"]);
    category::where("id",$id)->update([
        "name"=>$request->name,
      
    ]);
    return redirect("/category");
    
   }
}
