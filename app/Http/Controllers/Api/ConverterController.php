<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OpenApi\Attributes as OA;

class ConverterController extends Controller
{
    #[OA\Post(path: '/api/v1/convert', tags: ['Converter'], summary: 'Converte JSON/PHP')]
    #[OA\Response(response: 200, description: 'OK')]
    public function transform(Request $request) 
    { 
        return response()->json(['status' => 'pending']); 
    }
}