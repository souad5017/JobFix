<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\ServiceRequest;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

public function store(Request $request, ServiceRequest $serviceRequest)
{
    $request->validate([
        'amount' => 'required|numeric|min:0',
    ]);

    Payment::create([
        'service_request_id' => $serviceRequest->id,
        'amount' => $request->amount,
        'status' => 'pending',
    ]);

    return back()->with('success', 'Price added successfully');
}

public function update(Request $request, ServiceRequest $serviceRequest)
{
    $request->validate([
        'amount' => 'required|numeric|min:0'
    ]);

    $payment = Payment::where('service_request_id', $serviceRequest->id)->first();

    if ($payment) {
        $payment->update([
            'amount' => $request->amount
        ]);
    }

    return back()->with('success', 'Price updated successfully');
}

    public function pay(Request $request)
    {
       
        $request->validate([
            'payment_id' => 'required|exists:payments,id',
        ]);

        $payment = Payment::findOrFail($request->payment_id);

        if ($payment->status === 'paid') {
            return back()->with('error', 'Already paid.');
        }

        Stripe::setApiKey(env('STRIPE_SECRET'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'mode' => 'payment',

            'line_items' => [[
                'price_data' => [
                    'currency' => 'mad',
                    'product_data' => [
                        'name' => 'Service Payment',
                    ],
                    'unit_amount' => $payment->amount * 100,
                ],
                'quantity' => 1,
            ]],

            'success_url' => route('payment.success', $payment->id),
            'cancel_url'  => route('payment.cancel', $payment->id),
        ]);

        return redirect($session->url);
    }
    public function success($id)
    {
        $payment = Payment::findOrFail($id);

        $payment->update([
            'status' => 'paid'
        ]);

        return redirect()->back()->with('success', 'Payment successful.');
    }

    public function cancel($id)
    {
        $payment = Payment::findOrFail($id);

        $payment->update([
            'status' => 'failed'
        ]);

        return redirect()->back()->with('error', 'Payment cancelled.');
    }


}
