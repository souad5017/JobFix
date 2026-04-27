<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageProfilController extends Controller
{
      public function updatePhoto(Request $request)
    {
        $request->validate([
            'photo' => ['required', 'image', 'max:2048'],
        ]);

        $user = $request->user();

        if ($request->hasFile('photo')) {

            $path = $request->file('photo')->store('profile-photos', 'public');
            $user->update(['image' => $path]);
        }
    //    dd( $path);

        return back()->with('status', 'profile-photo-updated');
    }
}
