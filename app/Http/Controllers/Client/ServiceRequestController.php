<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
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

        return view('client.my_requests', compact('requests'));
    }
    public function store(Request $request, $professionalId)
    {
        ServiceRequest::create([
            'client_id' => auth()->id(),
            'professional_id' => $professionalId,
            'title' => $request->title,
            'description' => $request->description,
            'scheduled_at'=> $request->scheduled_at
        ]);

        return back()->with('success', 'Request sent successfully');
    }
}
