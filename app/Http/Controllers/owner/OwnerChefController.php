<?php

namespace App\Http\Controllers\owner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OwnerChefController extends Controller
{
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

        $chef = auth()->user()->chefs()->create($attributes);

        return redirect('/dashboard/chefs/create');
    }

    protected function validateRequest()
    {
        return request()->validate([
            'first_name' => 'required',
            'last_name' => 'required'
        ]);
    }
}
