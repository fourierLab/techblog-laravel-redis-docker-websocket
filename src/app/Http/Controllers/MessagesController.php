<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        return view('messages.index');
    }

    public function store(Request $request)
    {
        event(new \App\Events\MessageEvent($request->message));

        return redirect()->route('messages.index');
    }
}
