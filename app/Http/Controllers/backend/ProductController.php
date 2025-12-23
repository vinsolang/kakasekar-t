<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image; // <-- add this line

class ProductController extends Controller
{
    
     /*==========================================================
                            @@ Products
    ==========================================================*/
    public function addProduct(){
        return view("backend.products.add-product");
    }
    public function viewProduct(){
          $row = DB::table("products")->orderByDesc('id')->get();
        return view("backend.products.view-product", ["row"=> $row]);
        // return view("backend.products.view-product", ["row"=> $row]);
    }
    public function submitToAddProduct(Request $request){
        $request->validate([
            'name'          => 'required|string|max:255',
            'name_km'          => 'required|string|max:255',
            'price'         => 'required|numeric|min:0',
            'price_km'         => 'required|numeric|min:0',
            'price_5'         => 'required|numeric|min:0',
            'price_60'         => 'required|numeric|min:0',
            'price_120'         => 'required|numeric|min:0',
            'price_600'         => 'required|numeric|min:0',
            'price_infinity'         => 'required|numeric|min:0',
            'capacity'           => 'required|string|max:255',
            'description'   => 'required|string',
            'how_use'       => 'required|string',
            'description_km'   => 'required|string',
            'how_use_km'       => 'required|string',
            'image_product' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:20480',
            'banner' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:10240',
        ]);

        // Handle file upload thumbnail
        $image_product = $request->file('image_product');
        $path = 'assets/products/thumbnail';
        $image = time() . '-' . $image_product->getClientOriginalName();
        $image_product->move(public_path($path), $image);

         // Handle file upload thumbnail
        $banner = $request->file('banner');
        $path_banner = 'assets/products/banner';
        $image_banner = time() . '-' . $banner->getClientOriginalName();
        $banner->move(public_path($path_banner), $image_banner);

        // Insert into DB
        $result = DB::table('products')->insert([
            'name'          => $request->name,
            'price'         => $request->price,
            'name_km'          => $request->name_km,
            'price_km'         => $request->price_km,
            'price_5'         => $request->price_5,
              'price_60'         => $request->price_60,
             'price_120'         => $request->price_120,
             'price_600'         => $request->price_600,
             'price_infinity'         => $request->price_infinity,
            'capacity'           => $request->capacity,
            'description'   => $request->description,
            'how_use'       => $request->how_use,
            'description_km'   => $request->description_km,
            'how_use_km'       => $request->how_use_km,
            'image_product' => $image,
            'banner'=> $image_banner,
        ]);

        if ($result) {
            return redirect()->route('view_product')->with('success','Product created successfully!');
        } else {
            return back()->with('error','Something went wrong, try again.');
        }

    }
    // Update Product
    public function editProduct($id){
        $row = DB::table('products')->where('id', $id)->first();
        return view('backend.products.update-product', ['row'=> $row]);
    }
    public function submitToUpdateProduct(Request $request){
        $request->validate([
        'update_name'        => 'required|string|max:255',
        'update_price'       => 'required|numeric|min:0',
        'update_name_km'        => 'required|string|max:255',
        'update_price_km'       => 'required|numeric|min:0',
        'update_price_5'         => 'required|numeric|min:0',
            'update_price_60'         => 'required|numeric|min:0',
            'update_price_120'         => 'required|numeric|min:0',
            'update_price_600'         => 'required|numeric|min:0',
            'update_price_infinity'         => 'required|numeric|min:0',
        'update_qty'         => 'required|string|max:255',
        'update_description' => 'required|string',
        'update_how_use'     => 'required|string',
        'update_description_km' => 'required|string',
        'update_how_use_km'     => 'required|string',
        'update_image_product'=> 'nullable|image|mimes:jpg,jpeg,png,gif|max:20480',
        'update_banner'       => 'nullable|image|mimes:jpg,jpeg,png,gif|max:20480',
    ]);

    $update_id = $request->update_id;

    $product = DB::table('products')->where('id', $update_id)->first();

    // Handle thumbnail
    if($request->hasFile('update_image_product')){
        $image_file = $request->file('update_image_product');
        $image_name = time() . '-' . $image_file->getClientOriginalName();
        $image_file->move(public_path('assets/products/thumbnail'), $image_name);

        // Delete old file if exists
        if($product->image_product && file_exists(public_path('assets/products/thumbnail/'.$product->image_product))){
            unlink(public_path('assets/products/thumbnail/'.$product->image_product));
        }
    } else {
        $image_name = $product->image_product;
    }

    // Handle banner
    if($request->hasFile('update_banner')){
        $banner_file = $request->file('update_banner');
        $banner_name = time() . '-' . $banner_file->getClientOriginalName();
        $banner_file->move(public_path('assets/products/banner'), $banner_name);

        // Delete old banner if exists
        if($product->banner && file_exists(public_path('assets/products/banner/'.$product->banner))){
            unlink(public_path('assets/products/banner/'.$product->banner));
        }
    } else {
        $banner_name = $product->banner;
    }

    // Update database
    DB::table('products')->where('id', $update_id)->update([
        'name'          => $request->update_name,
        'price'         => $request->update_price,
        'name_km'          => $request->update_name_km,
        'price_km'         => $request->update_price_km,
        'price_5'         => $request->update_price_5,
              'price_60'         => $request->update_price_60,
             'price_120'         => $request->update_price_120,
             'price_600'         => $request->update_price_600,
             'price_infinity'         => $request->update_price_infinity,
        'capacity'           => $request->update_qty,
        'description'   => $request->update_description,
        'how_use'       => $request->update_how_use,
        'description_km'   => $request->update_description_km,
        'how_use_km'       => $request->update_how_use_km,
        'image_product' => $image_name,
        'banner'        => $banner_name,
    ]);

    return redirect()->route('view_product')->with('success','Product updated successfully!');
    }
    // Remove Product
    public function submitToRemoveProduct(Request $request){
         $remove_id = $request->input('remove_id');

        $result = DB::table('products')->where('id', $remove_id)->delete();

        if($result){
            return redirect()->route('view_product')->with('success','delated success');
        }
    }
    
}
