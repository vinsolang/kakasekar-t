<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivitiesController extends Controller
{
    public function addActivities()
    {
        return view('backend.activity.add-activity');
    }

    public function viewActivities()
    {
        $viewActivities = DB::table('activities')->get();
        return view('backend.activity.view-activity', compact('viewActivities'));
    }
    public function submitToAddActivities(Request $request){
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'title_km' => 'required|string',
            'description_km' => 'required|string',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        // Create folder if not exists
    $path = public_path('assets/activity/thumbnail');
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }

    // Save each uploaded image
    $imagePaths = [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($path, $imageName);
            $imagePaths[] = 'assets/activity/thumbnail/' . $imageName;
        }
    }
    $result = DB::table('activities')->insert([
        'title'       => $request->title,
        'description' => $request->description,
        'title_km'       => $request->title_km,
        'description_km' => $request->description_km,
        'images'      => json_encode($imagePaths), // Store multiple image paths as JSON
        'created_at'  => now(),
        'updated_at'  => now(),
    ]);
    if($result){
         return redirect()->route('view_activities')->with('message', 'News added successfully!');
    }
    }
    // Update
    public function editActivities($id)
{
    $news = DB::table('activities')->where('id', $id)->first();

    if (!$news) {
        return redirect()->back()->with('error', 'Activity not found!');
    }

    $oldImages = $news->images ? json_decode($news->images, true) : [];

    return view('backend.activity.update-activity', compact('news', 'oldImages'));
}
public function submitToEditActivities(Request $request)
{
    // 1. Validate
    $request->validate([
        'id' => 'required|integer',
        'edit_title' => 'required|string',
        'edit_description' => 'required|string',
        'edit_title_km' => 'required|string',
        'edit_description_km' => 'required|string',
        'edit_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    $id = $request->id;

    // 2. Read old record
    $old = DB::table('activities')->where('id', $id)->first();

    if (!$old) {
        return redirect()->back()->with('error', 'Activity not found!');
    }

    // 3. Process old images (keep or remove)
    $keepOldImages = $request->keep_old_images ?? []; // array of old images you still want

    // 4. Upload new images (if any)
    $path = public_path('assets/activity/thumbnail');

    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }

    $newImages = [];

    if ($request->hasFile('edit_images')) {
        foreach ($request->file('edit_images') as $image) {
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($path, $imageName);

            $newImages[] = 'assets/activity/thumbnail/' . $imageName;
        }
    }

    // 5. Merge final image list
    $finalImages = array_merge($keepOldImages, $newImages);

    // 6. Update database
    DB::table('activities')
        ->where('id', $id)
        ->update([
            'title' => $request->edit_title,
            'description' => $request->edit_description,
            'title_km' => $request->edit_title_km,
            'description_km' => $request->edit_description_km,
            'images' => json_encode($finalImages),
            'updated_at' => now(),
        ]);

    return redirect()->route('view_activities')->with('message', 'Activity updated successfully!');
}
// Remove News
  public function submitToRemoveActivities(Request $request){
     $remove_id = $request->input('remove_id');

        $result = DB::table('activities')->where('id', $remove_id)->delete();

        if($result){
            return redirect()->route('view_activities')->with('success','delated success');
        }
  }
}
