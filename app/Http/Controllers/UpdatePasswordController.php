<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UpdatePasswordController extends Controller
{
    public function edit()
    {
        return view('pages.password.edit');
    }

    public function update(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'min:6', 'confirmed'],
        ]);

        if (!Hash::check($request->current_password, auth()->user()->password)) {
            throw ValidationException::withMessages([
                'current_password' => 'Your current password does not match with our record',
            ]);
        }

        $user = User::find(auth()->user()->id);

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('profile', $user->username)->with('success', 'Your password has been updated!');
    }
}
