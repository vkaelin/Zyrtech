<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;

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

    public function edit(User $user)
    {
        return view('admin.users.edit');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/admin/users');
    }
}
