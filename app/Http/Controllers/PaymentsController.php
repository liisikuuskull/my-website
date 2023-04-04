<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;

class PaymentsController extends Controller
{
    public function createPaymentIntent(Request $request)
    {
        // Set your Stripe API key
        Stripe::setApiKey('your_stripe_secret_key');

        // Create a PaymentIntent with amount and currency
        $paymentIntent = \Stripe\PaymentIntent::create([
            'amount' => $request->input('amount'),
            'currency' => 'usd',
        ]);

        // Return the client secret for the PaymentIntent as a JSON response
        return response()->json(['client_secret' => $paymentIntent->client_secret]);
    }
}
