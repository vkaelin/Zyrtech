<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = auth()->user()->chefs()
            ->orderBy('first_name')
            ->orderBy('last_name')
            ->paginate(10);
            
        $users->loadMissing('role');

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store()
    {
    }
}
