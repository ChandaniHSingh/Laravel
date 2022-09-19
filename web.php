<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\crudController;
use App\Http\Controllers\imageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//View
Route::get('/home',function(){
    return view('home');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/contact',function(){
    return view('contact');
});
// View with argument
Route::get('/temp/{name}/{age}',function($name,$age){
    return view('temp',["Name"=>$name,"Age"=>$age]);
});
// Route::get('contactFormData',function(){
//     return view('contactFormData');
// });
Route::post('contactFormData',[testController::class,'contactFormData']);

// Controller
Route::get('show2URL',[testController::class,'show2']);
// Controller with argument
Route::get('showURL/{name}/{age}',[testController::class,'show']); 
// call view from controller
Route::get('showHome',[testController::class,'showHome']);
Route::get('showTemp/{name}/{age}',[testController::class,'showTemp']);

// Crud Stud

Route::get('stud',[crudController::class,'viewStud']);
Route::get('stud/{id}/{name}/{email}/{phone}',[crudController::class,'editViewStud']);

Route::post('editStudData',[crudController::class,'editStudData']);
Route::post('editStud',[crudController::class,'editStud']);

// Middleware example
Route::get('noaccess',function(){
    return view('noaccess');
});
// 1. Global
// 2. Grouped
// Route::group(['middleware'=>['protectAge']],function(){
//     Route::view('home','home');
//     Route::view('about','about');
// });
// 3. Route
// Route::get('/home',function(){
//     return view('home');
// })->middleware('protectAge');


// Image Item CRUD
Route::get('item',[imageController::class,'loadItem']);
Route::post('addItemData',[imageController::class,'addItemData']);
Route::get('editItem/{eid}',[imageController::class,'editItem']);
Route::get('deleteItem/{did}',[imageController::class,'deleteItem']);

