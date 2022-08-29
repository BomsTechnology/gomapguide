<?php

use App\Http\Controllers\Api\PaypalPaymentController;
use App\Http\Controllers\Api\StripePaymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('payment-stripe', [StripePaymentController::class, 'index']);
Route::post('payment-paypal', [PaypalPaymentController::class, 'index']);
