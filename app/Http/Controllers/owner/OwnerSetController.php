<?php

namespace App\Http\Controllers\Owner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OwnerSetController extends Controller
{
    public function index()
    {
        return view('owner.sets.index');
    }

    public function create()
    {
        return view('owner.sets.create');
    }
}
