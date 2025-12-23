<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    /*==========================================================
                            @@ Our Team
    ==========================================================*/
    public function addOurTeam(){
        return view("backend.our-team.add-team");
    }
    public function viewOurTeam(){
        $row = DB::table("teams")->get();
        return view("backend.our-team.view-team", ["row"=> $row]);
    }
    public function submitAddOurTeam(Request $request){
        // Validation
        $request->validate([
            'name'        => 'required|string|max:255',
            'position'    => 'required|string|max:255',
            'description' => 'required|string',
            'name_km'        => 'required|string|max:255',
            'position_km'    => 'required|string|max:255',
            'description_km' => 'required|string',
            'profile' => 'required|image|mimes:jpg,jpeg,png,gif|max:10240',
        ]);

        $name = $request->input("name");
        $position = $request->input("position");
        $description = $request->input("description");
        $name_km = $request->input("name_km");
        $position_km = $request->input("position_km");
        $description_km = $request->input("description_km");
        $profile = $request->file("profile");

        $path = './assets/team';
        $image = time().'-'.$profile->getClientOriginalName();
        $profile->move($path, $image);

        $result = DB::table('teams')->insert([
            'name'=> $name,
            'position'=> $position,
            'description'=> $description,
            'name_km'=> $name_km,
            'position_km'=> $position_km,
            'description_km'=> $description_km,
            'profile'=> $image,
        ]);

        if($result){
            return redirect()->route('view_team')->with('success','created sucess');
        }
    }
    // update team
    public function updateTeam($id){
        $row = DB::table('teams')->where('id', $id)->get();
        return view('backend.our-team.update-team', ['row'=> $row]);
    }
    public function submitToUpdateTeam(Request $request){
        
        // $request->validate([
        //     'update_name'        => 'required|string|max:255',
        //     'update_position'    => 'required|string|max:255',
        //     'update_description' => 'required|string',
        //     'old_profile' => 'required|image|mimes:jpg,jpeg,png,gif|max:10240',
        //     'update_profile' => 'required|image|mimes:jpg,jpeg,png,gif|max:10240',
        // ]);


        $update_id = $request->input('update_id');
        $update_name = $request->input('update_name');
        $update_position = $request->input('update_position');
        $update_description = $request->input('update_description');
        $update_name_km = $request->input('update_name_km');
        $update_position_km = $request->input('update_position_km');
        $update_description_km = $request->input('update_description_km');
        $update_profile = $request->file('update_profile');
        $old_profile = $request->input('old_profile');

        $path = './assets/team';
        if( $update_profile ){
            $image = time().'-'. $update_profile->getClientOriginalName();
            $update_profile->move($path, $image);
        }elseif($old_profile){
            $image = $old_profile;
        }

        $result = DB::table('teams')->where('id', $update_id)->update([
            'name'=> $update_name,
            'position'=> $update_position,
            'description'=> $update_description,
            'name_km'=> $update_name_km,
            'position_km'=> $update_position_km,
            'description_km'=> $update_description_km,
            'profile'=> $image
        ]);
        if($result){
            return redirect()->route('view_team')->with('success','updated sucess');
        }
    }
    public function submitToRemoveTeam(Request $request){
         $remove_id = $request->input('remove_id');

        $result = DB::table('teams')->where('id', $remove_id)->delete();

        if($result){
            return redirect()->route('view_team')->with('success','delated success');
        }
    }   
}
