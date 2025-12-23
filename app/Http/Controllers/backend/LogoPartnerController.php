<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogoPartnerController extends Controller
{
    /*==========================================================
                            @@ LOGO
    ==========================================================*/
    public function addLogo(){
        return view("backend.logo.add-logo");
    }
    public function viewLogo(){
        $row = DB::table("logo")->get();
        return view("backend.logo.view-logo", ["row"=> $row]);
    }
    public function submitLogo(Request $request){
        //  Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048', 
        ]);

        $name = $request->input("name");
        $thumbnail = $request->file("thumbnail");

        $path = './assets/logo';
        $image = time().'-'.$thumbnail->getClientOriginalName();
        $thumbnail -> move($path, $image);

        $result = DB::table('logo')->insert([
            'name'     => $name,
            'thumbnail'=> $image
        ]);
        if($result){
            return redirect()->route('view_logo')->with('success','sucess');
        }
        
    }   
    // Update logo
    public function updateLogo($id){
        $row = DB::table('logo')->where('id' , $id)->get();
        return view('backend.logo.update-logo', ['row'=> $row]);
    }
    public function submitUpdateLogo(Request $request){
        
        //  Validation
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'thumbnail' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048', 
        // ]);

        $update_id = $request->input('update_id');
        $update_name = $request->input(key: 'update_name');
        $update_thumbnail = $request->file(key:'update_thumbnail');
        $old_thumbnail = $request->file('old_thumbnail');

        $path = './assets/logo';
        if($update_thumbnail){
            $image_thumbnail = time().'-'.$update_thumbnail->getClientOriginalName();
            $update_thumbnail -> move($path, $image_thumbnail);
        }elseif($old_thumbnail){
            $image_thumbnail = $old_thumbnail;
        }

        $result = DB::table('logo')->where('id', $update_id)->update([
            'name'=> $update_name,
            'thumbnail'=> $image_thumbnail
        ]);
        if($result){
            return redirect()->route('view_logo', ['id'=>$update_id])->with('success','Updated');
        }
    }
    // Remove logo
    public function removeLogo(Request $request){
        $remove_id = $request->input('remove_id');

        $result = DB::table('logo')->where('id', $remove_id)->delete();

        if($result){
            return redirect()->route('view_logo')->with('success','delated success');
        }
    }
}
