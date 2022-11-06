<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UpdateProfileInformationController extends Controller
{
    public function edit()
    {
        return view('pages.users.edit');
    }

    public function update(Request $request)
    {
        $attr = $request->validate([
            'username' => ['required', 'alpha_num', 'unique:users,username,' . auth()->user()->id],
            'name' => ['required', 'min:3', 'max:191', 'string'],
            'email' => ['required', 'min:3', 'max:191', 'string', 'email'],
        ]);

        $user = User::find(auth()->user()->id);

        $user->update($attr);

        return redirect()->route('profile', $user->username)->with('success', 'Your profile has been updated!');
    }
}
