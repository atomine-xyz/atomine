<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PaymentManager;

class PaymentController extends Controller
{
    public function get(Request $request) {
        $validated = $request->validate([
            'nickname' => ['required', 'max:16', 'alpha_dash:ascii', 'not_regex:/-/s']
        ]);
        return PaymentManager::createPayment($request->input('nickname'), $request->input('coupon') ?? ' ');
    }

    public function show() {
        return view('form', ['error' => '']);
    }

    public function success(Request $request) {
        return view('success');
    }
}
