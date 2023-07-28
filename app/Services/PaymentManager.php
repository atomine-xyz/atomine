<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PaymentManager
{
    public static function createPayment($nick) {
        $serverId = env('EASYDONATE_SERVER_ID');
        $productId = env('EASYDONATE_PRODUCT_ID');
        $secret = env('EASYDONATE_SECRET');

        $url = Http::withHeaders([
            'Shop-key' => $secret
        ])->get('https://easydonate.ru/api/v3/shop/payment/create', [
            'customer' => $nick,
            'server_id' => $serverId,
            'products' => json_encode([$productId => 1]),
            'success_url' => 'https://atomine.xyz/successbuy',
        ])->json();


        return redirect()->away($url['response']['url']);
    }

    public static function getPrice() {
        $productId = env('EASYDONATE_PRODUCT_ID');
        $secret = env('EASYDONATE_SECRET');

        $url = Http::withHeaders([
            'Shop-key' => $secret
        ])->get('https://easydonate.ru/api/v3/shop/product/' . $productId)->json();
        return $url['response']['price'];
    }
}
