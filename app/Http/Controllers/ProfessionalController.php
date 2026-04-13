<?php

namespace App\Http\Controllers;

use App\Models\Professional;
use Illuminate\Http\Request;

class ProfessionalController extends Controller
{
    public function show($id)
    {
        $professional = Professional::with('reviews')->findOrFail($id);

        return view('client.professional-profile', compact('professional'));
    }
}