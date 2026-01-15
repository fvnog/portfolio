<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ConverterController;
use App\Http\Controllers\Api\WhatsappController;
use App\Http\Controllers\Api\ImageController;
use App\Http\Controllers\Api\WeatherController;

/*
|--------------------------------------------------------------------------
| API Routes - Fernando Portfolio
|--------------------------------------------------------------------------
*/

// Grupo de Ferramentas (Tools)
Route::prefix('v1')->group(function () {

    // Conversor de Dados
    Route::post('/convert', [ConverterController::class, 'transform']);

    // WhatsApp Integration
    Route::post('/whatsapp/send', [WhatsappController::class, 'sendMessage']);
    Route::get('/whatsapp/status', [WhatsappController::class, 'checkStatus']);

    // Image Processing
    Route::post('/image/remove-bg', [ImageController::class, 'removeBackground']);
    Route::post('/image/convert', [ImageController::class, 'convertFormat']);

    // Weather Sync
    Route::get('/weather/{city}', [WeatherController::class, 'getForecast']);

});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
