<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use EasyDonate\Sdk;

class PaymentManager
{
    public static function createPayment($nick, $coupon) {
        $serverId = env('EASYDONATE_SERVER_ID');
        $productId = env('EASYDONATE_PRODUCT_ID');
        $secret = env('EASYDONATE_SECRET');

        $sdk = new Sdk($secret);
        return $sdk->payment()->setCustomer($nick)->setServerId($serverId)->setProducts([$productId => 1])->setSuccessUrl('https://atomine.xyz/successbuy')->setCoupon($coupon)->create(true);
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
