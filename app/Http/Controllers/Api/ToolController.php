<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OpenApi\Attributes as OA;

#[OA\Info(title: "Fernando Portfolio API", version: "1.0.0")]
#[OA\Server(url: 'http://localhost:8000', description: "Servidor Local")]
class ToolController extends Controller
{
    #[OA\Post(
        path: '/api/convert',
        summary: 'Converte dados entre formatos',
        tags: ['Ferramentas'],
        requestBody: new OA\RequestBody(
            required: true,
            content: new OA\JsonContent(
                properties: [
                    new OA\Property(property: 'content', type: 'string', example: '{"name": "Fernando"}'),
                    new OA\Property(property: 'format', type: 'string', example: 'json_to_php_array')
                ]
            )
        ),
        responses: [
            new OA\Response(response: 200, description: 'Sucesso'),
            new OA\Response(response: 400, description: 'Erro')
        ]
    )]
    public function convert(Request $request)
    {
        return response()->json(['result' => 'Funcionando!']);
    }
}