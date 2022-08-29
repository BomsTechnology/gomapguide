<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Omnipay\Omnipay;

class PaypalPaymentController extends Controller
{
    private $gateway;



    public function index(Request $request)
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_SECRET_ID'));
        $this->gateway->setTestMode(false);
        try {
            $reponse = $this->gateway->purchase([
                'amount' =>  $request->price,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url("success"),
                'cancelUrl' => url("pay-erros"),
            ]);

            $r = [
                'status' => true,
                'message' => 'Payment Start',
                'data' => [
                    'redirectUrl' => $reponse->send()->getData()['links'][1]['href']
                ]
            ];
            return response($r, 201);
        } catch (\Throwable $th) {
            $r = [
                'status' => false,
                'message' => 'Payment Error',
                'data' => [
                    'redirectUrl' => $th->getMessage()
                ]
            ];
            return response($r, 500);
        }
    }
}
