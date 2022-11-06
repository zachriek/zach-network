<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowingController extends Controller
{
    public function index(User $user, $following)
    {
        if ($following != 'followers' && $following != 'followings') {
            return redirect()->route('profile', $user->username);
        }

        return view('pages.users.following', [
            'user' => $user,
            'follows' => ($following == 'followers') ? $user->followers()->latest()->paginate(18)->withQueryString() : $user->follows()->latest()->paginate(18)->withQueryString()
        ]);
    }

    public function store(Request $request, User $user)
    {
        if (auth()->user()->hasFollow($user)) {
            auth()->user()->unfollow($user);
            return back()->with('success', 'You are unfollow the user');
        } else {
            auth()->user()->follow($user);
            return back()->with('success', 'You are follow the user');
        }
    }
}
