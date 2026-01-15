<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OpenApi\Attributes as OA;

class WhatsappController extends Controller
{
    #[OA\Post(path: '/api/v1/whatsapp/send', tags: ['WhatsApp'], summary: 'Dispara msg via Evolution API')]
    #[OA\Response(response: 200, description: 'OK')]
    public function sendMessage(Request $request) 
    { 
        return response()->json(['status' => 'pending']); 
    }

    #[OA\Get(path: '/api/v1/whatsapp/status', tags: ['WhatsApp'], summary: 'Check Evolution API Status')]
    #[OA\Response(response: 200, description: 'OK')]
    public function checkStatus() 
    { 
        return response()->json(['status' => 'online']); 
    }
}