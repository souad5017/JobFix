<?php

namespace App\Http\Controllers\Professional;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
  
    public function index()
    {
        $requests = ServiceRequest::where('professional_id', auth()->user()->professional->id)
            ->latest()
            ->get();

        return view('professional.services', compact('requests'));
    }

    public function show(ServiceRequest $serviceRequest)
    {
        $this->authorize('view', $serviceRequest);

        $payment = Payment::where('service_request_id' , $serviceRequest->id)->first();

        return view('professional.show_services', [
            'request' => $serviceRequest , 
            'payment' =>  $payment 
        ]);
    }

 public function updateStatus(ServiceRequest $serviceRequest, $status)
{
    $this->authorize('update', $serviceRequest);

    $allowedStatus = ['pending', 'accepted', 'rejected'];
    
    if (!in_array($status, $allowedStatus)) {
        abort(400, 'Statut invalide');
    }

    $updateData = ['status' => $status];

    if ($status === 'accepted') {
        $updateData['progress'] = 'in_progress';
    } elseif ($status === 'rejected') {
        $updateData['progress'] = 'not_started';
    }

    $serviceRequest->update($updateData);

    $message = $status === 'accepted' ? 'Demande acceptée et travail lancé !' : 'Statut mis à jour.';
    
    return back()->with('success', $message);
}
}