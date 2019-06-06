<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetController extends Controller
{
    public function index()
    {
        $sets = auth()->user()->assignedSets();

        return view('sets.index', compact('sets'));
    }
}
