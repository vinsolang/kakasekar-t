<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
     public function sendOrder(Request $request)
    {
        try {
            // Telegram Bot credentials
            $botToken = "7836811007:AAG49APFgXC9GMqg0YszW0GPXQWhDKUHNhg";
            $chatId   = "-4887542691";
          

            // Build message
            $message = "🛒 *New Order Received*\n\n"
                ."📦 Product: *{$request->product}*\n"
                ."💵 Price: {$request->price}$\n"
                ."🔢 Quantity: {$request->qty}\n"
                ."💰 Total: {$request->total}$\n\n"
                ."👤 Name: {$request->name}\n"
                ."📞 Phone: {$request->phone}\n"
                ."🏠 Address: {$request->address}";

            // Send to Telegram
            $url = "https://api.telegram.org/bot${botToken}/sendMessage";

            $response = Http::post($url, [
                'chat_id' => $chatId,
                'text' => $message,
                'parse_mode' => 'Markdown'
            ]);

            if ($response->successful()) {
                return response()->json(['status' => 'success']);
            } else {
                return response()->json(['status' => 'error', 'error' => $response->body()]);
            }

        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'error' => $e->getMessage()]);
        }
    }
}
