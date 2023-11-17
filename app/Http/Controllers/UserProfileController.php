<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserProfileController extends Controller
{
    public function show()
    {
        return view('admin-pages.user-profile');
    }

    public function update(Request $request)
    {
        $attributes = $request->validate([
            'username' => ['required','max:20', 'min:2'],
            'email' => ['required', 'email', 'max:255',  Rule::unique('users')->ignore(auth()->user()->id),],
            'role' => ['max:5'],
        ]);

        auth()->user()->update([
            'username' => $request->get('username'),
            'email' => $request->get('email'),
            'role' => $request->get('role'),
        ]);
        return back()->with('succes', 'Profile succesfully updated');
    }
}
