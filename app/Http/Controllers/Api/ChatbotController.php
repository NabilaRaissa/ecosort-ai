<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    public function chat(Request $request)
    {
        $prompt = $request->input('message');

        if (!$prompt) {
            return response()->json(['error' => 'Pesan tidak boleh kosong'], 400);
        }

        $apiKey = env('OPENAI_API_KEY');

        if (!$apiKey) {
            return response()->json(['error' => 'API Key tidak ditemukan'], 500);
        }

        // 🔥 API BARU (WAJIB)
        $response = Http::withHeaders([
            'Authorization' => "Bearer $apiKey",
            'Content-Type' => 'application/json',
        ])->post('https://api.openai.com/v1/responses', [
            'model' => 'gpt-4o-mini',   // atau gpt-5.1 jika mau
            'input' => $prompt
        ]);

        if ($response->failed()) {
            return response()->json([
                'error' => 'Gagal terhubung ke OpenAI',
                'detail' => $response->json()
            ], 500);
        }

        return response()->json([
            'reply' => $response->json()['output'][0]['content'][0]['text']
        ]);
    }
}
