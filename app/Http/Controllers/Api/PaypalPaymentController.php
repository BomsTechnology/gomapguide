<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Notifications\CustomerPaymentNotification;
use App\Notifications\PaymentNotification;
use Illuminate\Support\Facades\Notification;

class PaypalPaymentController extends Controller
{
    private $gateway;

    public function index(Request $request)
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_SECRET_ID'));
        $this->gateway->setTestMode(true);
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

    public function success(Request $request)
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_SECRET_ID'));
        $this->gateway->setTestMode(true);
        $fields = $request->validate([
            'paymentId' => 'required',
            'token' => 'required',
            'PayerID' => 'required',
        ]);

        $transaction = $this->gateway->completePurchase([
            'payer_id' => $fields['PayerID'],
            'transactionReference' => $fields['paymentId']
        ]);
        $reponse = $transaction->send();
        if ($reponse->isSuccessful()) {
            $data = $reponse->getData();
            $payment = Payment::create([
                'id_payment' => $data['id'],
                'customer_name' => $data['payer']['payer_info']['first_name'] . ' ' . $data['payer']['payer_info']['last_name'],
                'customer_email' => $data['payer']['payer_info']['email'],
                'customer_phone' => $data['payer']['payer_info']['payer_id'],
                'customer_address' => "{$data['payer']['payer_info']['shipping_address']['city']} {$data['payer']['payer_info']['shipping_address']['country_code']} {$data['payer']['payer_info']['shipping_address']['line1']} / postal:{$data['payer']['payer_info']['shipping_address']['postal_code']}",
                'amount' => $data['transactions'][0]['amount']['total'],
                'type' => 'paypal'
            ]);

            $customerNotif = [
                'product_id' =>  '',
                'product_title' => '',
                'product_price' => $data['transactions'][0]['amount']['total'],
                'product_period' => '',
            ];

            Notification::route('mail', $data['payer']['payer_info']['email'])->notify(new CustomerPaymentNotification($customerNotif));
            Notification::route('mail', 'contact@gomapguide.com')->notify(new PaymentNotification($payment));
            $response = [
                'status' => true,
                'message' => 'Payment ok',

            ];
            return response($response, 201);
        }
    }
}
