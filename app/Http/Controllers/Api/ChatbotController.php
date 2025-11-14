<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ChatbotController extends Controller
{
    /**
     * Chat with Gemini AI
     */
    public function chat(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'message' => 'required|string|max:500',
        ]);

        $userMessage = $validated['message'];

        // 🔥 CEK DLU APAKAH PESAN USER MASUK PERTANYAAN KHUSUS (IDENTITAS BOT)
        $custom = $this->customReplies($userMessage);
        if ($custom) {
            return response()->json([
                'success' => true,
                'data' => [
                    'user_message' => $userMessage,
                    'bot_response' => $custom,
                    'timestamp' => now()->format('Y-m-d H:i:s')
                ]
            ]);
        }

        // Jika bukan pertanyaan khusus → lanjut ke AI
        $systemContext = $this->buildSystemContext();

        $botResponse = $this->callGeminiAPI($userMessage, $systemContext);

        // Return response
        return response()->json([
            'success' => true,
            'data' => [
                'user_message' => $userMessage,
                'bot_response' => $botResponse,
                'timestamp' => now()->format('Y-m-d H:i:s')
            ]
        ]);
    }


    /**
     * CUSTOM REPLIES UNTUK PERTANYAAN KHUSUS
     * TIDAK DIJAWAB OLEH AI — LANGSUNG DIJAWAB MANUAL
     */
    private function customReplies($message)
    {
        $m = strtolower($message);

        // daftar pertanyaan yang dianggap "tentang identitas bot"
        $identityQuestions = [
            "siapa kamu",
            "kamu siapa",
            "kamu itu apa",
            "apa kamu",
            "siapa nama kamu",
            "kamu bot apa",
            "apa itu ecosort ai",
            "apa tugas kamu",
            "apakah kamu manusia",
            "bot ini siapa",
        ];

        foreach ($identityQuestions as $q) {
            if (str_contains($m, $q)) {
                return "Aku adalah chatbot pintar milik EcoSort AI 🤖💚. Tugasku membantu kamu memilah sampah dan menjelaskan kategori plastik, logam, dan kertas!";
            }
        }

        return null;
    }


    /*** Call Gemini API*/
    private function callGeminiAPI($userMessage, $systemContext)
{
    $apiKey = env('GEMINI_API_KEY');

    if (!$apiKey) {
        return "Maaf, chatbot sedang tidak tersedia. API key belum dikonfigurasi.";
    }

    try {
        $fullPrompt = $systemContext . "\n\nUser: " . $userMessage;

        // 🔥 call Gemini API pakai header baru
        $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-goog-api-key' => $apiKey
            ])
            ->timeout(30)
            ->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent", [
                "contents" => [
                    [
                        "parts" => [
                            ["text" => $fullPrompt]
                        ]
                    ]
                ]
            ]);

        if ($response->successful()) {
            $data = $response->json();

            // ekstrak teks respons
            return $data['candidates'][0]['content']['parts'][0]['text']
                ?? "Maaf, saya tidak dapat memahami respons AI.";
        }

        Log::error("Gemini API Error: " . $response->body());

        return "Maaf, terjadi kesalahan saat menghubungi AI.";

    } catch (\Exception $e) {
        Log::error("Gemini API Exception: " . $e->getMessage());
        return "Maaf, terjadi kesalahan teknis.";
    }
}



    /*** Build system context untuk EcoSort AI*/
    private function buildSystemContext()
    {
        $context = "Kamu adalah EcoSort AI Assistant, chatbot pintar untuk sistem deteksi sampah otomatis.\n\n";
        
        $context .= "INFORMASI SISTEM ECOSORT AI:\n";
        $context .= "- EcoSort AI adalah sistem deteksi sampah menggunakan AI dan kamera\n";
        $context .= "- Sistem ini mendeteksi 3 kategori: Plastik, Logam, Kertas\n";
        $context .= "- Menggunakan teknologi computer vision\n\n";
        
        $context .= "TUGASMU:\n";
        $context .= "1. Menjawab pertanyaan tentang pemilahan sampah\n";
        $context .= "2. Memberikan edukasi daur ulang\n";
        $context .= "3. Memberikan tips pengelolaan sampah\n\n";
        
        $context .= "ATURAN MENJAWAB:\n";
        $context .= "- Jawab dalam bahasa Indonesia yang ramah\n";
        $context .= "- Gunakan emoji yang relevan ♻️ 🌱 💚\n";
        $context .= "- Maksimal 3-4 kalimat per jawaban\n\n";

        return $context;
    }


    /*** Health check untuk chatbot*/
    public function health()
    {
        $apiKey = env('GEMINI_API_KEY');

        return response()->json([
            'status' => 'ok',
            'chatbot' => 'online',
            'api_configured' => !empty($apiKey),
            'timestamp' => now()
        ]);
    }
}
