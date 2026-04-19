<?php

namespace App\Http\Controllers\Professional;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Professional;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create()
    {
        $categories = Category::all();

        return view('Professional.Profile.complete', compact('categories'));
    }
    public function store(Request $request)
    {
       
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'city' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
        ]);
        $imagePath = $request->file('image')->store('profiles', 'public');


        Professional::create([
            'user_id' => auth()->id(),
            'image' => $imagePath,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'city' => $request->city,
            'phone' => $request->phone,
        ]);

        return redirect('professional/dashboard')->with('success', 'Profil créé avec succès');
    }
}
