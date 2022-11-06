<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatusRequest;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function edit(Status $status)
    {
        return view('pages.statuses.edit', [
            'status' => $status
        ]);
    }

    public function update(StatusRequest $request, Status $status)
    {
        $status->update($request->all());
        return redirect()->route('profile', auth()->user()->username)->with('success', 'Your Status was updated!');
    }

    public function store(StatusRequest $request)
    {
        $request->make();
        return redirect()->back();
    }

    public function destroy(Status $status)
    {
        $status->delete();
        return redirect()->route('profile', auth()->user()->username)->with('success', 'Your Status was deleted!');
    }
}
