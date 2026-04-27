<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Review;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientProfil extends Controller
{
    public function index()
    {

        $user = auth()->user();
        $requestsCount = ServiceRequest::where('client_id', $user->id)->count();
        $amountSum = Payment::where('status', 'paid')
            ->whereHas('serviceRequest', function ($q) {
                $q->where('client_id', auth()->id());
            })
            ->sum('amount');

        $reviews = Review::where('client_id' , $user->id)->get();

        return view('client.profil', compact('user', 'requestsCount', 'amountSum' , 'reviews'));
    }

}
