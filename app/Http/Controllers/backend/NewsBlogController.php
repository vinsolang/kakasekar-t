<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsBlogController extends Controller
{
     public function addNews()
    {
        return view('backend.news.add-news');
    }

    public function viewNews()
    {
        $newsList = DB::table('news')->get();
        return view("backend.news.view-news",["newsList"=> $newsList]);
    }
    public function submitToAddNews(Request $request){
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'title_km' => 'required|string',
            'description_km' => 'required|string',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        // Create folder if not exists
    $path = public_path('assets/news/thumbnail');
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }

    // Save each uploaded image
    $imagePaths = [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($path, $imageName);
            $imagePaths[] = 'assets/news/thumbnail/' . $imageName;
        }
    }
    $result = DB::table('news')->insert([
        'title'       => $request->title,
        'description' => $request->description,
        'title_km'       => $request->title_km,
        'description_km' => $request->description_km,
        'images'      => json_encode($imagePaths), // Store multiple image paths as JSON
        'created_at'  => now(),
        'updated_at'  => now(),
    ]);
    if($result){
         return redirect()->route('view_news')->with('message', 'News added successfully!');
    }
    }
    // Update
    public function editNews($id)
{
    $news = DB::table('news')->where('id', $id)->first();

    if (!$news) {
        return redirect()->back()->with('error', 'News not found!');
    }

    $oldImages = $news->images ? json_decode($news->images, true) : [];

     return view('backend.news.edite-news', compact('news', 'oldImages'));
}
public function submitToEditNews(Request $request)
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
    $old = DB::table('news')->where('id', $id)->first();

    if (!$old) {
        return redirect()->back()->with('error', 'News not found!');
    }

    // 3. Process old images (keep or remove)
    $keepOldImages = $request->keep_old_images ?? []; // array of old images you still want

    // 4. Upload new images (if any)
    $path = public_path('assets/news/thumbnail');

    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }

    $newImages = [];

    if ($request->hasFile('edit_images')) {
        foreach ($request->file('edit_images') as $image) {
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($path, $imageName);

            $newImages[] = 'assets/news/thumbnail/' . $imageName;
        }
    }

    // 5. Merge final image list
    $finalImages = array_merge($keepOldImages, $newImages);

    // 6. Update database
    DB::table('news')
        ->where('id', $id)
        ->update([
            'title' => $request->edit_title,
            'description' => $request->edit_description,
            'title_km' => $request->edit_title_km,
            'description_km' => $request->edit_description_km,
            'images' => json_encode($finalImages),
            'updated_at' => now(),
        ]);

    return redirect()->route('view_news')->with('message', 'News updated successfully!');
}
// Remove News
  public function submitToRemoveNews(Request $request){
     $remove_id = $request->input('remove_id');

        $result = DB::table('news')->where('id', $remove_id)->delete();

        if($result){
            return redirect()->route('view_news')->with('success','delated success');
        }
  }



//     public function addNews(){
//         return view("backend.news.add-news");
//     }
//     public function viewNews(){
//         $newsList = News::all();
//         return view("backend.news.view-news",["newsList"=> $newsList]);
//     }

//      // Save new news
//      public function submitToAddNews(Request $request)
//     {
//         $request->validate([
//             'title' => 'required|string',
//             'description' => 'required|string',
//             'title_km' => 'required|string',
//             'description_km' => 'required|string',
//             'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//         ]);

//         $imagePaths = [];

//         if ($request->hasFile('images')) {
//             foreach ($request->file('images') as $img) {
//                 $filename = time() . '-' . uniqid() . '.' . $img->getClientOriginalExtension();
//                 $img->move(public_path('uploads/news'), $filename);

//                 $imagePaths[] = 'uploads/news/' . $filename;
//             }
//         }

//         // Save news with JSON images
//         $news = News::create([
//             'title' => $request->title,
//             'description' => $request->description,
//             'title_km' => $request->title_km,
//             'description_km' => $request->description_km,
//             'images' => json_encode($imagePaths), // store as JSON
//         ]);

//         return redirect()->route('view_news')->with('message', 'News added successfully!');
//     }
//     // Edit News
//   public function editNews($id){
//       $news = News::findOrFail($id);

//     // Decode JSON string into array
//     $oldImages = $news->images ? json_decode($news->images, true) : [];

//     return view('backend.news.edite-news', compact('news', 'oldImages'));
//   }
//   public function submitToEditNews(Request $request){
//     $news = News::findOrFail($request->id);

//     $news->title = $request->edit_title;
//     $news->description = $request->edit_description;
//     $news->title_km = $request->edit_title_km;
//     $news->description_km = $request->edit_description_km;

//     $finalImages = [];

//     if ($request->hasFile('edit_images')) {
//         // Replace all old images
//         foreach ($request->file('edit_images') as $file) {
//             $path = $file->store('uploads/news', 'public');
//             $finalImages[] = 'storage/' . $path;
//         }
//     } else {
//         // Keep old if no new upload
//         $finalImages = $request->input('keep_old_images', []);
//     }

//     $news->images = json_encode($finalImages);
//     $news->save();

//     return redirect()->route('view_news')->with('message', 'News updated successfully');
//   }
//   // Remove News
//   public function submitToRemoveNews(Request $request){
//      $remove_id = $request->input('remove_id');

//         $result = DB::table('news')->where('id', $remove_id)->delete();

//         if($result){
//             return redirect()->route('view_news')->with('success','delated success');
//         }
//   }

}
