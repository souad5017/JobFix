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


        $requestsCount = ServiceRequest::where('progress', 'completed')
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
        return view('client.my_requests', compact('requests', 'amountSum', 'requestsCount', 'requestsTotals'));
    }
    public function store(Request $request, $professionalId)
    {
        // dd($request);

        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'scheduled_at' => 'nullable|date',
            'images' => 'nullable|array|max:5',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'nullable|date',
            'time' => 'nullable',
        ], [
            'title.required' => 'Le titre est obligatoire.',
            'title.string' => 'Le titre doit être un texte.',

            'description.required' => 'La description est obligatoire.',
            'description.string' => 'La description doit être un texte.',

            'date.date' => 'La date est invalide.',
            'time.required' => 'L\'heure est obligatoire.',

            'images.array' => 'Les images doivent être sous forme de liste.',
            'images.max' => 'Vous pouvez ajouter maximum 5 images.',

            'images.*.image' => 'Chaque fichier doit être une image.',
            'images.*.mimes' => 'Formats autorisés: jpeg, png, jpg, gif.',
            'images.*.max' => 'Chaque image ne doit pas dépasser 2MB.',
        ]);

        // dd($request);

        $images = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $imageName = time() . '_' . uniqid() . '.' . $img->extension();
                $img->move(public_path('images'), $imageName);

                $images[] = 'images/' . $imageName;
            }
        }

        $scheduled_at = null;

        if ($request->date && $request->time) {
            $scheduled_at = $request->date . ' ' . $request->time;
        }

        ServiceRequest::create([
            'client_id' => auth()->id(),
            'professional_id' => $professionalId,
            'title' => $request->title,
            'image' =>  $images,
            'description' => $request->description,
            'scheduled_at' => $scheduled_at
        ]);

        return redirect()->back()->with('success', 'Request sent successfully');
    }

    public function show(ServiceRequest $serviceRequest)
    {
        $this->authorize('view', $serviceRequest);
        if ($serviceRequest->client_id !== auth()->id()) {
            abort(403);
        }
        // dd($serviceRequest);

        return view('client.show_service', [
            'request' => $serviceRequest
        ]);
    }
}
