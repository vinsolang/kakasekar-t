<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StrategicPartnersController extends Controller
{
     /*==========================================================
                            @@ strategic Partners
    ==========================================================*/
    public function addStrategic(){
        return view("backend.strategicPartners.add-strategic");
    }
    public function viewStrategic(){
        $row = DB::table("strategic")->get();
        return view("backend.strategicPartners.view-strategic", ["row"=> $row]);
    }
    public function submitStrategic(Request $request){
        //  Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048', 
        ]);
        
        $name = $request->input("name");
        $thumbnail = $request->file("thumbnail");

        $path = './assets/strategic';
        $image = time().'-'.$thumbnail->getClientOriginalName();
        $thumbnail -> move($path, $image);

        $result = DB::table('strategic')->insert([
            'name'=> $name,
            'thumbnail'=> $image,
        ]);
        if($result){
            return redirect()->route('view_strategic')->with('success','sucess');
        }
        
    }   
    // Update logo
    public function updateStrategic($id){
        $row = DB::table('strategic')->where('id' , $id)->get();
        return view('backend.strategicPartners.update-strategic', ['row'=> $row]);
    }
    public function submitUpdateStrategic(Request $request){

        //  //  Validation
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'thumbnail' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048', 
        // ]);

        $update_id = $request->input('update_id');
        $update_name = $request->input(key: 'update_name');
        $update_thumbnail = $request->file(key:'update_thumbnail');
        $old_thumbnail = $request->input('old_thumbnail');

        $path = './assets/strategic';
        if($update_thumbnail){
            $image_thumbnail = time().'-'.$update_thumbnail->getClientOriginalName();
            $update_thumbnail -> move($path, $image_thumbnail);
        }elseif($old_thumbnail){
            $image_thumbnail = $old_thumbnail;
        }

        $result = DB::table('strategic')->where('id', $update_id)->update([
            'name'=> $update_name,
            'thumbnail'=> $image_thumbnail
        ]);
        if($result){
            return redirect()->route('view_strategic')->with('success','Updated');
        }
    }
    // Remove logo
    public function removeStrategic(Request $request){
        $remove_id = $request->input('remove_id');

        $result = DB::table('strategic')->where('id', $remove_id)->delete();

        if($result){
            return redirect()->route('view_strategic')->with('success','delated success');
        }
    }
}
