<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OpenApi\Attributes as OA;

class WeatherController extends Controller
{
    #[OA\Get(path: '/api/v1/weather/{city}', tags: ['Weather'], summary: 'Busca clima atual')]
    #[OA\Parameter(name: 'city', in: 'path', required: true, schema: new OA\Schema(type: 'string'))]
    #[OA\Response(response: 200, description: 'OK')]
    public function getForecast($city) 
    { 
        return response()->json(['city' => $city, 'temp' => 'pending']); 
    }
}