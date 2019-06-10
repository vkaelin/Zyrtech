<?php

namespace App\Http\Controllers\Owner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class OwnerChefController extends Controller
{
    public function index()
    {
        return view('owner.chefs.index');
    }

    public function create()
    {
        return view('owner.chefs.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'group' => 'required'
        ]);
        $attributes['role_id'] = 3; // chef

        $names = explode(' ', $attributes['name'], 2);
        unset($attributes['name']);
        $attributes['first_name'] = $names[0];
        $attributes['last_name'] = $names[1] ?? '';

        auth()->user()->chefs()->create($attributes);

        return redirect('/dashboard/chefs/');
    }

    protected function validateRequest()
    {
        return request()->validate([
            'first_name' => 'required',
            'last_name' => 'required'
        ]);
    }
}
