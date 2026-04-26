<?php

namespace App\Http\Controllers\Professional;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 use App\Models\ServiceRequest;

class ProDashboardController extends Controller
{



     public function index()
    {
        $userId = auth()->id();

        $requestsCount = ServiceRequest::where('professional_id' , $userId)->count();
        // dd($requestsCount);



        // $amountSum =
           

        // $recentRequests = 
           
        // $reviewsCount =

        // $averageRating = 

        return view('professional.dashboard'
        // , compact(
        //     'requestsCount',
        //     'recentRequests',
        //     'professionals',
        //     'amountSum',
        //     'reviewsCount',
        //     'averageRating'
        // )
        );
    }
}
