<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetController extends Controller
{
    public function index()
    {
        $set = auth()->user()->currentSet;

        return view('sets.index', compact('set'));
    }
}
