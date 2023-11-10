<?php

namespace App\Http\Controllers;

use App\Models\ChatResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ChatGPTController extends Controller
{
    public function ChatGPT(Request $request){
        $search_text = $request->search_text;
        if(!$search_text){
            return response()->json(['Result'=>'Please give same text....'],500);
        }
        $response = Http::withHeaders([
            'Authorization' => 'Bearer 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',
            'Content-Type' => 'application/json',
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => $search_text],
            ],
            // 'temperature'=>0.5,
            // 'max_token'=>200,
            // 'top_p'=>1.0,
            // 'frequncy_penalty'=>0.52,
            // 'presence_penalty'=>0.5,
            // 'stop'=>["11."],

        ]);

        // Ensure a successful response
        if ($response->successful()) {
            // Continue to Step 2
            $result = $response->json();
            $generatedMessage = $result['choices'][0]['message']['content'];

            ChatResult::InsertChatData(auth()->guard('api')->id(),$generatedMessage);
            return response()->json(['Result'=>$generatedMessage]);

        } else {
            // Handle the error
            return response()->json(['Result'=>'Failed to communicate with ChatGPT API'],500);
        }
    }

    public function index(){
        $ChatData = ChatResult::with('user')->get();
        return response()->json(['chat_data' => $ChatData]);
    }
}
