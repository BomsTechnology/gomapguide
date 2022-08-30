<?php

use App\Models\Payment;
use App\Notifications\CustomerPaymentNotification;
use App\Notifications\PaymentNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;
use Stripe\Webhook;

Route::view('/', 'welcome');

// Route::get('/bo', function () {
//     // Notification::route('mail', 'msigha.megasoft@gmail.com')->notify(new PaymentNotification());
//     // dd(json_decode('{"id": "evt_1Lc7tgIgYYS6bcZVaMvV91O5","object": "event","api_version": "2022-08-01","created": 1661779260,"data": {"object": {"id": "cs_test_a1LRiCD8M2FPzJcqsx61cm6RqqaYlzac3a2AAwoQH7jXHlIQj46PJ9MHuw","object": "checkout.session","after_expiration": null,"allow_promotion_codes": null,"amount_subtotal": 3000,"amount_total": 3000,"automatic_tax": {"enabled": false,"status": null},"billing_address_collection": null,"cancel_url": "https://httpbin.org/post","client_reference_id": null,"consent": null,"consent_collection": null,"currency": "usd","customer": null,"customer_creation": "if_required","customer_details": {"address": {"city": null,"country": null,"line1": null,"line2": null,"postal_code": null,"state": null},"email": "stripe@example.com","name": null,"phone": null,"tax_exempt": "none","tax_ids": []},"customer_email": null,"expires_at": 1661865652,"livemode": false,"locale": null,"metadata": {},"mode": "payment","payment_intent": "pi_3Lc7teIgYYS6bcZV0wJ3AFxv","payment_link": null,"payment_method_collection": "always","payment_method_options": {},"payment_method_types": ["card"],"payment_status": "paid","phone_number_collection": {"enabled": false},"recovered_from": null,"setup_intent": null,"shipping_address_collection": null,"shipping_cost": null,"shipping_details": null,"shipping_options": [],"status": "complete","submit_type": null,"subscription": null,"success_url": "https://httpbin.org/post","total_details": {"amount_discount": 0,"amount_shipping": 0,"amount_tax": 0},"url": null}},"livemode": false,"pending_webhooks": 2,"request": {"id": null,"idempotency_key": null},"type": "checkout.session.completed"}'));
// });

Route::post('webhook/payment/succeeded', function (Request $request) {
    if ($request->type == 'checkout.session.completed') {

        $payment = Payment::create([
            'id_payment' => $request->data['object']['id'],
            'customer_name' => $request->data['object']['customer_details']['name'],
            'customer_email' => $request->data['object']['customer_details']['email'],
            'customer_phone' => $request->data['object']['customer_details']['phone'],
            'customer_address' => "{$request->data['object']['customer_details']['address']['city']} {$request->data['object']['customer_details']['address']['country']} {$request->data['object']['customer_details']['address']['line1']} / postal:{$request->data['object']['customer_details']['address']['postal_code']}",
            'amount' => $request->data['object']['amount_total'],
        ]);

        $customerNotif = [
            'product_id' =>  $request->data['object']['metadata']['product_id'],
            'product_title' => $request->data['object']['metadata']['product_title'],
            'product_price' => $request->data['object']['metadata']['product_price'],
            'product_period' => $request->data['object']['metadata']['product_period'],
        ];

        Notification::route('mail', $request->data['object']['customer_details']['email'])->notify(new CustomerPaymentNotification($customerNotif));
        Notification::route('mail', 'contact@gomapguide.com')->notify(new PaymentNotification($payment));
    }
    return 'OK';
});

Route::view('{any}', 'welcome')->where('any', '.*');
