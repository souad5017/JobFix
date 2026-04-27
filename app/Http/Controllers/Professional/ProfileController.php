<?php

namespace App\Http\Controllers\Professional;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Professional;
use App\Models\ServiceRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create()
    {
        $this->authorize('create', Professional::class);

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
            'category_id' => $request->category_id,
            'description' => $request->description,

        ]);

        auth()->user()->update([
            'image' => $imagePath,
            'city' => $request->city,
            'phone' => $request->phone,
        ]);

        return redirect()->route('professional.dashboard')->with('success', 'Profil créé avec succès');
    }

    public function edit()
    {
        $user = auth()->user();
        $categories = Category::all();
        $professional = Professional::where('user_id', $user->id)->first();
        $services = ServiceRequest::where('professional_id', $professional->id)->where('status', 'accepted')
            ->where('progress', '!=', 'completed')
            ->get();

        $services->load('client');
        return view('professional.profile.edit', compact('user', 'categories', 'professional', 'services'));
    }

    public function update(Request $request)
    {

        $request->validate([
            'category_id' => ['required', 'exists:categories,id'],
            'description' => ['nullable', 'string', 'min:10'],
        ]);

        $user = $request->user();

        if ($user->professional) {
            $user->professional->update([
                'category_id' => $request->category_id,
                'description' => $request->description,
            ]);
        }

        return back()->with('status', 'profile-updated');
    }
}
