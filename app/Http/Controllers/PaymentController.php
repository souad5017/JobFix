<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function store(Request $request, ServiceRequest $serviceRequest)
    {
        $this->authorize('update', $serviceRequest);

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
        $this->authorize('update', $serviceRequest);

        $request->validate([
            'amount' => 'required|numeric|min:0'
        ]);

        Payment::update([
            'amount' => $request->amount
        ]);

        return back()->with('success', 'Price updated successfully');
    }
}
