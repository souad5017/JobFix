<?php

namespace App\Http\Controllers\Professional;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Professional;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\ServiceRequest;

class ProDashboardController extends Controller
{



    public function index()
    {
        $user = auth()->user();
        $professional = Professional::where('user_id', $user->id)->first();
        $requestsTermine = ServiceRequest::where('professional_id', $professional->id)->count();
        $amountSum = Payment::where('status', 'paid')
            ->whereHas('serviceRequest', function ($q) use ($professional) {
                $q->where('professional_id', $professional->id);
            })->sum('amount');

        // dd($amountSum);
        $newRequests = ServiceRequest::where('professional_id', $professional->id)->where('status', 'pending')->count();

        $reviewsCount = Review::where('professional_id' , $professional->id)->avg('rating') ?? 0;

        $requests = ServiceRequest::where('professional_id',$professional->id)->orderBy('created_at', 'desc')->paginate(3);

        return view(
            'professional.dashboard',
            compact(
                'user',
                'requestsTermine',
                'newRequests',
                'amountSum',
                'reviewsCount',
                'requests'
            )
        );
    }
}
