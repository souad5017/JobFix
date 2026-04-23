<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;

class ServiceRequestController extends Controller
{
    public function myRequests()
    {
        $requests = ServiceRequest::with(['professional.user', 'payment'])
            ->where('client_id', auth()->id())
            ->latest()
            ->get();


        $requestsCount = ServiceRequest::where('progress' , 'completed')
        ->with('professional.user')
            ->where('client_id', auth()->id())
            ->count();

        $requestsTotals = ServiceRequest::with('professional.user')
            ->where('client_id', auth()->id())
            ->count();

        $amountSum = Payment::where('status', 'paid')
            ->whereHas('serviceRequest', function ($q) {
                $q->where('client_id', auth()->id());
            })
            ->sum('amount');

        // dd($amountSum);
        return view('client.my_requests', compact('requests' , 'amountSum' , 'requestsCount' , 'requestsTotals'));
    }
    public function store(Request $request, $professionalId)
    {
        ServiceRequest::create([
            'client_id' => auth()->id(),
            'professional_id' => $professionalId,
            'title' => $request->title,
            'description' => $request->description,
            'scheduled_at' => $request->scheduled_at
        ]);

        return back()->with('success', 'Request sent successfully');
    }
}
