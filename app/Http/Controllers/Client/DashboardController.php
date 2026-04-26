<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\Payment;
use App\Models\Professional;
use App\Models\Review;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = auth()->id();

        $requestsCount = ServiceRequest::where('client_id', $userId)->count();
        // $favoritesCount = Favorite::where('client_id', $userId)->count();
        $amountSum = Payment::where('status', 'paid')
            ->whereHas('serviceRequest', function ($q) {
                $q->where('client_id', auth()->id());
            })
            ->sum('amount');

        $recentRequests = ServiceRequest::where('client_id', $userId)
            ->latest()
            ->take(5)
            ->get();

        $professionals = Professional::withAvg('reviews', 'rating')->paginate(3);
        // $review = Review::where('professional_id', $id)->avg('rating');
        $reviewsCount = Review::where('client_id', auth()->id())->count();

        $averageRating = Review::where('client_id', auth()->id())->avg('rating') ?? 0;

        return view('client.dashboard', compact(
            'requestsCount',
            'recentRequests',
            'professionals',
            'amountSum',
            'reviewsCount',
            'averageRating'
        ));
    }
}
