<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsBlogController extends Controller
{
    public function addNews(){
        return view("backend.news.add-news");
    }
    public function viewNews(){
        $newsList = News::all();
        return view("backend.news.view-news",["newsList"=> $newsList]);
    }

     // Save new news
     public function submitToAddNews(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'title_km' => 'required|string',
            'description_km' => 'required|string',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePaths = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $filename = time() . '-' . uniqid() . '.' . $img->getClientOriginalExtension();
                $img->move(public_path('uploads/news'), $filename);

                $imagePaths[] = 'uploads/news/' . $filename;
            }
        }

        // Save news with JSON images
        $news = News::create([
            'title' => $request->title,
            'description' => $request->description,
            'title_km' => $request->title_km,
            'description_km' => $request->description_km,
            'images' => json_encode($imagePaths), // store as JSON
        ]);

        return redirect()->route('view_news')->with('message', 'News added successfully!');
    }
    // Edit News
  public function editNews($id){
      $news = News::findOrFail($id);

    // Decode JSON string into array
    $oldImages = $news->images ? json_decode($news->images, true) : [];

    return view('backend.news.edite-news', compact('news', 'oldImages'));
  }
  public function submitToEditNews(Request $request){
    $news = News::findOrFail($request->id);

    $news->title = $request->edit_title;
    $news->description = $request->edit_description;
    $news->title_km = $request->edit_title_km;
    $news->description_km = $request->edit_description_km;

    $finalImages = [];

    if ($request->hasFile('edit_images')) {
        // Replace all old images
        foreach ($request->file('edit_images') as $file) {
            $path = $file->store('uploads/news', 'public');
            $finalImages[] = 'storage/' . $path;
        }
    } else {
        // Keep old if no new upload
        $finalImages = $request->input('keep_old_images', []);
    }

    $news->images = json_encode($finalImages);
    $news->save();

    return redirect()->route('view_news')->with('message', 'News updated successfully');
  }
  // Remove News
  public function submitToRemoveNews(Request $request){
     $remove_id = $request->input('remove_id');

        $result = DB::table('news')->where('id', $remove_id)->delete();

        if($result){
            return redirect()->route('view_news')->with('success','delated success');
        }
  }

}
