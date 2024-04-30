<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function index()
    {
        return view('chatbot');
    }

    public function respond(Request $request)
    {
        $userMessage = $request->input('message');
        $response = $this->getBotResponse($userMessage);

        return response()->json(['message' => $response]);
    }
    private function getBotResponse($message)
    {
        // Basit bir örnek için, gelen mesajı bir diziye dönüştürelim
        $userMessage = strtolower($message);
        $responses = [
            'merhaba' => 'Merhaba! Nasıl yardımcı olabilirim?',
            'nasılsın' => 'Ben bir botum, bu yüzden hissetmiyorum ama teşekkür ederim, siz nasılsınız?',
            'güle güle' => 'Güle güle! Başka bir sorunuz olursa yazmaktan çekinmeyin.',
            'selam' => 'Selam! Size nasıl yardımcı olabilirim?',
            // İstediğiniz kadar eklemeler yapabilirsiniz.
        ];
        if (array_key_exists($userMessage, $responses)) {
            return $responses[$userMessage];
        } else {
            // Eşleşen bir cevap yoksa, varsayılan bir cevap döndürelim.
            return 'Üzgünüm, anlamadım. Lütfen tekrarlayın veya başka bir şey sorun.';
        }
    }
}
