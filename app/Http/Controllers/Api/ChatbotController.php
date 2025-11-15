<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function ask(Request $request)
    {
        $message = $request->input('message', '');

        // Contoh logika chatbot sederhana
        $reply = $this->getBotReply($message);

        return response()->json(['reply' => $reply]);
    }

    private function getBotReply($message)
    {
        $message = strtolower($message);

        if (str_contains($message, 'plastik')) {
            return "Botol plastik termasuk sampah **Plastik**. ♻️";
        } elseif (str_contains($message, 'kertas')) {
            return "Kertas termasuk sampah **Kertas**. 📄";
        } elseif (str_contains($message, 'logam') || str_contains($message, 'kaleng')) {
            return "Kaleng/logam termasuk sampah **Logam**. 🥫";
        } else {
            return "Maaf, aku belum tahu kategori sampah itu. Coba tanya tentang Plastik, Kertas, atau Logam.";
        }
    }
}
