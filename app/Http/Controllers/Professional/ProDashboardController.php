<?php

namespace App\Http\Controllers\Professional;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 use App\Models\ServiceRequest;

class ProDashboardController extends Controller
{



     public function index()
    {
        $user = auth()->user();

        $requestsCount = ServiceRequest::where('professional_id' , $user->id)->count();
        // dd($requestsCount);



        // $amountSum =
           

        // $recentRequests = 
           
        // $reviewsCount =

        // $averageRating = 

        return view('professional.dashboard'
        , compact(
            'user'
        //     'requestsCount',
        //     'recentRequests',
        //     'professionals',
        //     'amountSum',
        //     'reviewsCount',
        //     'averageRating'
        )
        );
    }
}
