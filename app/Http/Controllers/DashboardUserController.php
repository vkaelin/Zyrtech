<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    public function index()
    {
        $this->authorize('administrate', auth()->user()->role);

        return view('dashboard.users.index');
    }

    public function create()
    {
        $this->authorize('manage', auth()->user()->role);

        return view('dashboard.users.create');
    }

    public function store()
    {
        $this->authorize('manage', auth()->user()->role);
    }
}
