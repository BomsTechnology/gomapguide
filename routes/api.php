<?php

use App\Http\Controllers\Api\PaypalPaymentController;
use App\Http\Controllers\Api\StripePaymentController;
use App\Notifications\ContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;



Route::post('payment-stripe', [StripePaymentController::class, 'index']);
Route::post('payment-paypal', [PaypalPaymentController::class, 'index']);
Route::post('payment-paypal/success', [PaypalPaymentController::class, 'success']);
Route::post('contact', function (Request $request) {
    $data = $request->validate([
        'name' => "required|string",
        'email' => "required|email",
        'message' => "required|string"
    ]);
    Notification::route('mail', 'contact@gomapguide.com')->notify(new ContactNotification($data));
    $response = [
        'status' => true,
        'message' => 'Contact message Send success',
    ];
    return response($response, 201);
});
