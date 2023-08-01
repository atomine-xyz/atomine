<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\DiscordAlerts\Facades\DiscordAlert;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/easydonate', function (Request $request) {
    $body = $request->all();
    if (empty($body)) {
        return "EMPTY REQUEST";
    }
    else {
        $webhookMessage = [
            [
                'title' => "Новая проходка, +{$body['income']} на счету, СЮДА!",
                'description' => "Никнейм: **`{$body['customer']}`**.\nМетод оплаты: **`{$body['payment_type']}`**.\nВремя: **`{$body['created_at']}`**",
                'color' => '#1ca9d4',
                'author' => [
                    'name' => 'Уведомления о проходках by L4DNO',
                    'icon_url' => 'https://avatars.githubusercontent.com/u/56505485'
                ],
            ]
        ];
        DiscordAlert::message('', $webhookMessage);
        return "OK";
    }
});
