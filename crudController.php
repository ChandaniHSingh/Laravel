<?php

namespace App\Http\Controllers;
use App\Models\Stud;

use Illuminate\Http\Request;

class crudController extends Controller
{
    function viewStud(){
        $allStud = Stud::all();
        return view('stud',['allStud'=>$allStud]);
    }
    function editStudData(Request $req){
        if($req->btnSubmit == "Insert"){
            $stud = new Stud;
            $stud->name = $req->txtName;
            $stud->email = $req->txtEmail;
            $stud->phone = $req->txtPhone;
            $stud->save();
            return redirect('stud');
        }
        elseif($req->btnSubmit == "Update"){
            $updateStud = ['name'=>$req->txtName,'email'=>$req->txtEmail,'phone'=>$req->txtPhone];
            Stud::whereId($req->txtID)->update($updateStud);
            return redirect('stud');
        }
    }

    function editStud(Request $req){
        if($req->btnSubmit == "Edit"){
            $eid = $req->txtID;
            $editStud = Stud::findOrFail($eid);
            $id = $editStud->id;
            $name = $editStud->name;
            $email = $editStud->email;
            $phone = $editStud->phone;
            return redirect('stud/'.$id.'/'.$name.'/'.$email.'/'.$phone.'');
        }
        elseif($req->btnSubmit == 'Delete'){
            $did = $req->txtID;
            $delStud = Stud::findOrFail($did);
            $delStud->delete();
            return redirect('stud');
        }
    }
    
    function editViewStud($id,$name,$email,$phone){
        $allStud = Stud::all();
        // echo $name;
        return view('stud',['allStud'=>$allStud,'ID'=>$id,'Name'=>$name,'Email'=>$email,'Phone'=>$phone]);
    }
}
