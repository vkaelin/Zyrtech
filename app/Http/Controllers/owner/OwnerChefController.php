<?php

namespace App\Http\Controllers\owner;

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
        $this->authorize('manage', auth()->user()->role);

        return view('owner.chefs.create');
    }

    public function store()
    {
        $this->authorize('manage', auth()->user()->role);

        $attributes = $this->validateRequest();
        $attributes['role_id'] = 3;

        $code = str_random(10);
        do
        {
            $code = str_random(10);
            $user_code = User::where('code', $code)->get();
        }
        while(!$user_code->isEmpty());
        $attributes['code'] = $code;

        $chef = auth()->user()->chefs()->create($attributes);

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
