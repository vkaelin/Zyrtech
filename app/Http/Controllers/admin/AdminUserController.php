<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class AdminUserController extends Controller
{
    public function index()
    {
        $this->authorize('administrate', auth()->user()->role);

        return view('admin.users.index');
    }

    public function create()
    {
        $this->authorize('administrate', auth()->user()->role);

        return view('admin.users.create');
    }

    public function store()
    {
        $this->authorize('administrate', auth()->user()->role);
    }
}
