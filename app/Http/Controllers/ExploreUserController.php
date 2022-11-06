<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ExploreUserController extends Controller
{
    public function index()
    {
        return view('pages.users.index', [
            'users' => User::paginate(6)->withQueryString()
        ]);
    }

    public function search(Request $request)
    {
        $users = User::where('name', 'like', "%" . $request->search . "%")
            ->orWhere('username', 'like', "%" . $request->search . "%")
            ->latest()
            ->paginate(6)
            ->withQueryString();

        return view('pages.users.index', [
            'users' => $users
        ]);
    }
}
