<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class imageController extends Controller
{
    function loadItem()
    {
        $allItem = Item::all();
        return view("imageCrud",['allItem'=>$allItem]);
    }
    function addItemData(Request $req)
    {
        if($req->btnSubmit == "Insert")
        {
            $ext = $req->fileImage->getClientOriginalExtension();
            $bname = $req->fileImage->getClientOriginalName();
            $basename = substr($bname,0,stripos($bname,'.'));
            $newfilename = md5($basename).rand(10,1000).time().'.'.$ext;
            
            $req->fileImage->move(public_path('uploads'),$newfilename);

            $item = new Item;
            $item->name = $req->txtName;
            $item->price = $req->txtPrice;
            $item->qty = $req->numQty;
            $item->image = $newfilename;
            $item->save();
            return redirect('item');
        }
        if($req->btnSubmit == "Update"){
            if($req->fileImage){
                // delete old image from folder        
                $deleteItem = Item::find($req->txtID);
                $newfilename = $deleteItem->image;
                unlink("C:/xampp/htdocs/laravel/my-project/public/uploads/".$newfilename);

                $ext = $req->fileImage->getClientOriginalExtension();
                $bname = $req->fileImage->getClientOriginalName();
                $basename = substr($bname,0,stripos($bname,'.'));
                $newfilename = md5($basename).rand(10,1000).time().'.'.$ext;
                
                $req->fileImage->move(public_path('uploads'),$newfilename);

                Item::where('id',$req->txtID)->update([
                    'name'=>$req->txtName,
                    'price'=>$req->txtPrice,
                    'qty'=>$req->numQty,
                    'image'=>$newfilename,
                ]);
            }
            else{
                Item::where('id',$req->txtID)->update([
                    'name'=>$req->txtName,
                    'price'=>$req->txtPrice,
                    'qty'=>$req->numQty,
                ]);
            }


            
            return redirect('item');
        }
    }
    function editItem($eid)
    {
        $item = Item::find($eid);
        $allItem = Item::all();
        return view("imageCrud",['editItem'=>$item,'allItem'=>$allItem]);
    }
    function deleteItem($did)
    {
        // delete Image from server(folder) also
        $deleteItem = Item::find($did);
        $newfilename = $deleteItem->image;
        unlink("C:/xampp/htdocs/laravel/my-project/public/uploads/".$newfilename);
        $item = Item::where('id',$did)->delete();
        return redirect('item');
    }
}
