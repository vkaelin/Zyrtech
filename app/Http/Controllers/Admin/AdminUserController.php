<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Role;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('first_name')
            ->orderBy('last_name')
            ->paginate(10);

        $users->loadMissing('role');

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();

        return view('admin.users.create', compact('roles'));
    }

    public function store()
    {
        $attributes = $this->validateRequest();

        User::create($attributes);

        return redirect('/admin/users')->with('success', "L'utilisateur a bien été créé!");
    }

    public function edit(User $user)
    {
        $roles = Role::all();

        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(User $user)
    {
        $password = request('password');
        request()->request->remove('password');

        $attributes = $this->validateRequest();

        $user->update($attributes);

        if ($password) {
            $user->password = Hash::make($password);
        }

        $user->save();

        return redirect('/admin/users')->with('success', "L'utilisateur a bien été modifié!");
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/admin/users')->with('success', "L'utilisateur a bien été supprimé!");
    }

    protected function validateRequest()
    {
        return request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'city' => 'required',
            'country' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'sometimes|min:8',
            'role_id' => 'required'
        ]);
    }
}
