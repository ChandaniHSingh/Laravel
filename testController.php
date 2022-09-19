<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    //
    function show($name,$age){
        echo $name." is ".$age." years old";
    }

    function show2(){
        echo "No Name and Age is defined";
    }

    function showHome(){
        echo view('home');
    }
    function showTemp($name,$age){
        echo view('temp',["Name"=>$name,"Age"=>$age]);
    }
    function contactFormData(){
        $name = $_POST['txtName'];
        $email = $_POST['txtEmail'];
        $comment = $_POST['txtComment'];
        echo view('contactFormData',["Name"=>$name,"Email"=>$email,"Comment"=>$comment]);
    }
}
