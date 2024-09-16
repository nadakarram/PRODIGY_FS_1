<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\feildsController;
use App\Http\Controllers\technicalController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[feildsController::class,"show_home"]);
Route::get('/login',[userController::class,"login_page_display"]);
Route::get('/signup',[userController::class,"signup_page_display"]);
Route::post('/regester',[userController::class,"regester"]);
Route::post("/logincheck",[userController::class,"logincheck"]);
Route::get("/logout",[userController::class,"logout"]);
Route::get("/adminlogin",[adminController::class,"adminlogin"]);
Route::post("/adminlogincheck",[adminController::class,"adminlogincheck"]);
Route::get("/technicallogin",[technicalController::class,"technicallogin"]);
Route::post("/technicallogincheck",[technicalController::class,"technicallogincheck"]);
Route::get("/dashbourd",[adminController::class,"dashbourd"]);

Route::get('/servies',[feildsController::class,"show_feilds"]);
Route::get('/showserviesadd',[feildsController::class,"show_form_add"]);
Route::get('/showserviesedit/{id}',[feildsController::class,"show_form_edit"]);
Route::post('/addservies',[feildsController::class,"addFeild"]);
Route::put('/editservies/{id}',[feildsController::class,"editFeild"]);
Route::delete('/deleteservies/{id}',[feildsController::class,"DeleteFeild"]);
Route::get('/category',[categoryController::class,"show"]);
Route::get('/showaddcat',[categoryController::class,"showadd"]);
Route::post('/addcat',[categoryController::class,"add"]);
Route::get('/showedit/{id}',[categoryController::class,"showedit"]);
Route::post('/edit/{id}',[categoryController::class,"edit"]);
Route::delete('/delete/{id}',[categoryController::class,"delete"]);
Route::get("/profile",[userController::class,"profile"]);
// Route::post('/editimage',[userController::class,"chage"]);
