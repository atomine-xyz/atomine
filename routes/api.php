<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

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
        dd("Пусто");
    }
    else {
        $webhookmessage = [
            'content' => 'Чел с ником `' . $body['customer'] . '` купил проходку. Тип: ' . $body['payment_type'] . '. Время: ' .$body['created_at']
        ];
        Http::post(env('DISCORD_WEBHOOK'), $webhookmessage);

    }
});
