<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;

class ServiceRequestController extends Controller
{
   public function store(Request $request, $professionalId)
{
    ServiceRequest::create([
        'client_id' => auth()->id(),
        'professional_id' => $professionalId,
        'description' => $request->description,
    ]);

    return back()->with('success', 'Request sent successfully');
}
}
