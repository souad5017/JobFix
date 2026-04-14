<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Professional;

class ProfessionalController extends Controller
{
    /**
     * Display all professionals for client
     */
    public function index()
    {
        $professionals = Professional::paginate(6);

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