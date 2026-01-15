<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OpenApi\Attributes as OA;

class ImageController extends Controller
{
    #[OA\Post(path: '/api/v1/image/remove-bg', tags: ['Image'], summary: 'Remove fundo de imagem')]
    #[OA\Response(response: 200, description: 'OK')]
    public function removeBackground(Request $request) 
    { 
        return response()->json(['status' => 'pending']); 
    }
}