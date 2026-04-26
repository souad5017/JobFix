<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Professional;
use App\Models\Review;
use App\Models\User;

class ProfessionalController extends Controller
{
    /**
     * Display all professionals for client
     */
    public function index()
    {
        $query = request()->input('search');

        $professionals = Professional::with('user')
            ->when($query, function ($q) use ($query) {
                $q->whereHas('user', function ($q2) use ($query) {
                    $q2->where('name', 'like', '%' . $query . '%');
                });
            })->withAvg('reviews', 'rating')
            ->paginate(6);
        $completedServicesCount = Professional::withCount([
            'requests as completed_services_count' => function ($q) {
                $q->where('status', 'accepted')
                    ->where('progress', 'completed');
            }
        ])->get();

        return view('client.professionals.index');
    }

    /**
     * Show single professional details
     */
    public function show($id)
    {
        $professional = Professional::findOrFail($id);
        $review = Review::where('professional_id', $id)->avg('rating');
        // dd($review);

        return view('client.professionals.show', compact('professional', 'review'));
    }
}
