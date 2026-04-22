<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\Professional;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = auth()->id();

        $requestsCount = ServiceRequest::where('client_id', $userId)->count();
        $favoritesCount = Favorite::where('client_id', $userId)->count();

        $recentRequests = ServiceRequest::where('client_id', $userId)
            ->latest()
            ->take(5)
            ->get();

        $professionals = Professional::paginate(3);

        return view('client.dashboard', compact(
            'requestsCount',
            'favoritesCount',
            'recentRequests',
            'professionals'
        ));
    }
}
