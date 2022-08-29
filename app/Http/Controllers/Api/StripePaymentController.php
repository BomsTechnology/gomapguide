<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripePaymentController extends Controller
{


    /**
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_PRIVATE_KEY'));
        Stripe::setApiVersion('2022-08-01');

        $Session = Session::create([
            'mode' =>
            $request->type,
            'line_items' => [
                [
                    'quantity' => 1,
                    'price' => $request->priceId
                ]
            ],
            'phone_number_collection' => [
                'enabled' => true,
            ],
            'billing_address_collection' => 'required',
            // 'shipping_address_collection' => [
            //     'allowed_countries' => ['CA', 'FR', 'US']
            // ],
            'metadata' => [
                'product_id' => $request->id
            ],
            'success_url' => url("success"),
            'cancel_url' => url("pay-erros"),
        ]);


        $response = [
            'status' => true,
            'message' => 'Payment Start',
            'data' => [
                'redirectUrl' => $Session->url
            ]
        ];
        return response($response, 201);
    }
}
