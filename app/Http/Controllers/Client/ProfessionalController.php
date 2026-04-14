<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Professional;
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
            })
            ->paginate(6);

        return view('client.professionals.index', compact('professionals'));
    }

    /**
     * Show single professional details
     */
    public function show($id)
    {
        $professional = Professional::findOrFail($id);

        return view('client.professionals.show', compact('professional'));
    }
}
