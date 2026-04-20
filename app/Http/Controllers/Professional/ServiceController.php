<?php

namespace App\Http\Controllers\Professional;

use App\Http\Controllers\Controller;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        $requests = ServiceRequest::where('professional_id', auth()->user()->professional->id)->get();

        return view('professional.services', compact('requests'));
    }
    public function updateStatus(ServiceRequest $request, $status)
    {
        $this->authorize('update', $request);

        $request->update([
            'status' => $status
        ]);

        return back();
    }
    public function show(ServiceRequest $request)
    {
        $this->authorize('view', $request);

        return view('professional.show_services', compact('request'));
    }
}
