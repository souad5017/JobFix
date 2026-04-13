<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Professional;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $professionals = Professional::query();

        if ($request->category) {
            $professionals->where('category', $request->category);
        }

        if ($request->city) {
            $professionals->where('city', $request->city);
        }

        $professionals = $professionals->get();

        return view('client.search', compact('professionals'));
    }
}
