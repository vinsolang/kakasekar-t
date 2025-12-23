<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Event;
use App\Models\News;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use function Laravel\Prompts\table;

class ClientController extends Controller
{
    // Home page
    public function index(){
        $showLogo = DB::table("logo")->limit(5)->get();
        $showStrategic = DB::table("strategic")->limit(5)->get();
        return view("frontend.home" , ["showLogo"=> $showLogo, 'showStrategic'=>$showStrategic]);
    }
    // About Us
    public function about(){
        $showCertificate = DB::table('certificate')->limit(5)->get();
        return view("frontend.about-us",["showCertificate"=> $showCertificate]);
    }
    // Our Product
    public function product(){
        $showProduct = DB::table("products")->limit(6)->get();

        return view("frontend.our-product", [
            "showProduct" => $showProduct,
        ]);
    }
    // Send order to Telegram
    public function sendOrder(Request $request)
    {
        try {
            $botToken = "7836811007:AAG49APFgXC9GMqg0YszW0GPXQWhDKUHNhg";
            $chatId   = "-4887542691";

            $message = "🛒 *New Order Received*\n\n"
                ."📦 Product: *{$request->product}*\n"
                ."🏷️ Type: {$request->type}\n"
                ."💵 Price: {$request->price}៛\n"
                ."🔢 Quantity: {$request->qty}\n"
                ."💰 Total: {$request->total}៛\n\n"
                ."👤 Name: {$request->name}\n"
                ."📞 Phone: {$request->phone}\n"
                ."🏠 Address: {$request->address}";

            $url = "https://api.telegram.org/bot${botToken}/sendMessage";

            $response = Http::post($url, [
                'chat_id' => $chatId,
                'text' => $message,
                'parse_mode' => 'Markdown'
            ]);

            return $response->successful()
                ? response()->json(['status' => 'success'])
                : response()->json(['status' => 'error', 'error' => $response->body()]);

        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'error' => $e->getMessage()]);
        }
    }
    
    // Our Team
    public function team(){
        $showTeam = DB::table("teams")->get();
        return view("frontend.our-team", ["showTeam"=> $showTeam]);
    }
    // Activities
     public function activities(){
        $activitiesList = DB::table('activities')->get();
        return view("frontend.activity", ["activitiesList"=>$activitiesList]);
    }
    // Event
     public function event(){
        $eventList = DB::table('events')->get();
        return view("frontend.event", ["eventList"=>$eventList]);
    }
    // News
    public function news(){
        $newsList = News::limit(10)->get();
        return view("frontend.news", ["newsList"=>$newsList]);
    }
    
    // News Detail
    // public function showNewDetail($id){
    //      $news = News::findOrFail($id);
    //     return view("frontend.news-detail", ["news"=>$news]);
    // }
    // Our Publication
    public function publication(){
        return view("frontend.our-publication");
    }
    // Career
    public function career(){
        return view("frontend.career");
    }
    // Contact us
    public function contact(){
        return view("frontend.contact-us");
    }
}
