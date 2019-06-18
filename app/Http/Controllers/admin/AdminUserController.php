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
        $attributes = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'city' => 'required',
            'country' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required',
        ]);

        User::create($attributes);

        return redirect('/admin/users');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(User $user)
    { }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/admin/users');
    }
}
