<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CertificateController extends Controller
{
    public function addCerti(){
        return view("backend.certificate.add-certi");
    }
    public function viewCertifi(){
        $row = DB::table("certificate")->get();
        return view("backend.certificate.view-certi", ["row"=> $row]);
    }
    // Submit Certificate
    public function submitCertificate(Request $request){
        //  Validation
        $request->validate([
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048', 
        ]);

        $thumbnail = $request->file("thumbnail");

        $path = './assets/certifiate';
        $image = time().'-'.$thumbnail->getClientOriginalName();
        $thumbnail -> move($path, $image);

        $result = DB::table('certificate')->insert([
            'thumbnail'=> $image,
        ]);
        if($result){
            return redirect()->route('add.certi')->with('success','Added sucess');
        }
    }
    // update certificate
    public function updateCertificate($id){
        $row = DB::table('certificate')->where('id', $id)->get();
        return view('backend.certificate.update-certi', ['row'=> $row]);
    }
    public function submitToUpdateCertificate(Request $request){


        $update_id = $request->input('update_id');
        $update_thumbnail = $request->file(key:'update_thumbnail');
        $old_thumbnail = $request->input('old_thumbnail');

        $path = './assets/certifiate';
        if($update_thumbnail){
            $image_thumbnail = time().'-'.$update_thumbnail->getClientOriginalName();
            $update_thumbnail -> move($path, $image_thumbnail);
        }elseif($old_thumbnail){
            $image_thumbnail = $old_thumbnail;
        }

        $result = DB::table('certificate')->where('id', $update_id)->update([
            'thumbnail'=> $image_thumbnail
        ]);
        if($result){
            return redirect()->route('view.certi')->with('success','Updated');
        }
    }
    // remove Certificate
    public function removeCertificate(Request $request){
        $remove_id = $request->input('remove_id');

        $result = DB::table('certificate')->where('id', $remove_id)->delete();

        if($result){
            return redirect()->route('view.certi')->with('success','deleted sucess');
        }
    }
}
