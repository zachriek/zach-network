<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $statuses = auth()->user()->timeline();
        $users = auth()->user()->follows()->limit(5)->get();

        return view('pages.home', [
            'statuses' => $statuses,
            'users' => $users
        ]);
    }

    public function search(Request $request)
    {
        $statuses = auth()->user()->timelineSearch($request);
        $users = auth()->user()->follows()->limit(5)->get();

        return view('pages.home', [
            'statuses' => $statuses,
            'users' => $users
        ]);
    }
}
