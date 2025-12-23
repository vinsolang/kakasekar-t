<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function addEvent()
    {
        return view('backend.event.add-event');
    }

    public function viewEvent()
    {
        $viewEvent = DB::table('events')->get();
        return view('backend.event.view-event', compact('viewEvent'));
    }
        public function submitToAddeEvent(Request $request){
            $request->validate([
                'title' => 'required|string',
                'description' => 'required|string',
                'title_km' => 'required|string',
                'description_km' => 'required|string',
                'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);       
            // Create folder if not exists
            $path = public_path('assets/event/thumbnail');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            // Save each uploaded image
            $imagePaths = [];
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->move($path, $imageName);
                    $imagePaths[] = 'assets/event/thumbnail/' . $imageName;
                }
            }
            $result = DB::table('events')->insert([
                'title'       => $request->title,
                'description' => $request->description,
                'title_km'       => $request->title_km,
                'description_km' => $request->description_km,
                'images'      => json_encode($imagePaths), // Store multiple image paths as JSON
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
            if($result){
                return redirect()->route('view_event')->with('message', 'Event added successfully!');
            }
        }
        // Update
    public function editEvent($id){
      $news = Event::findOrFail($id);

        // Decode JSON string into array
        $oldImages = is_array($news->images)
            ? $news->images
            : json_decode($news->images ?? '[]', true);

        return view('backend.event.update-event', compact('news', 'oldImages'));
    }
    public function submitToEditEvent(Request $request)
{
    $news = Event::findOrFail($request->id);

    $news->title = $request->edit_title;
    $news->description = $request->edit_description;
    $news->title_km = $request->edit_title_km;
    $news->description_km = $request->edit_description_km;

    $folder = public_path('assets/event/thumbnail');
    if (!file_exists($folder)) {
        mkdir($folder, 0777, true);
    }

    // Keep only the old images user did not remove
    $keepOldImages = $request->input('keep_old_images', []);

    // Delete old images that were removed
    foreach ($news->images as $oldImage) {
        if (!in_array($oldImage, $keepOldImages) && file_exists(public_path($oldImage))) {
            @unlink(public_path($oldImage));
        }
    }

    // Upload new images
    $newImages = [];
    if ($request->hasFile('edit_images')) {
        foreach ($request->file('edit_images') as $file) {
            $imageName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move($folder, $imageName);
            $newImages[] = 'assets/event/thumbnail/' . $imageName;
        }
    }

    // Merge old kept images + new images
    $finalImages = array_merge($keepOldImages, $newImages);

    // Save
    $news->images = $finalImages;
    $news->save();

    return redirect()->route('view_event')->with('message', 'Event updated successfully!');
}


    // Remove News
    public function submitToRemoveEvent(Request $request){
        $remove_id = $request->input('remove_id');

            $result = DB::table('events')->where('id', $remove_id)->delete();

            if($result){
                return redirect()->route('view_event')->with('success','delated success');
            }
    }
}
