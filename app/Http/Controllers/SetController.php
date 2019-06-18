<?php

namespace App\Http\Controllers;

class SetController extends Controller
{
    public function index()
    {
        $set = auth()->user()->currentSet;

        return view('sets.index', compact('set'));
    }
}
