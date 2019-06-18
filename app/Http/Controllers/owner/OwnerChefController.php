<?php

namespace App\Http\Controllers\Owner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class OwnerChefController extends Controller
{
    public function index()
    {
        $chefs = auth()->user()->chefs()
            ->orderBy('first_name')
            ->orderBy('last_name')
            ->paginate(10);

        return view('owner.chefs.index', compact('chefs'));
    }

    public function create()
    {
        return view('owner.chefs.create');
    }

    public function store()
    {
        $attributes = $this->validateRequest();
        $attributes['role_id'] = 3; // chef

        $this->explodeName($attributes);

        auth()->user()->chefs()->create($attributes);

        return redirect('/dashboard/chefs/')->with('success', 'Le compte a bien été créé!');
    }

    public function edit(User $chef)
    {
        $this->authorize('update', $chef);

        return view('owner.chefs.edit', compact('chef'));
    }

    public function update(User $chef)
    {
        $this->authorize('update', $chef);

        $attributes = $this->validateRequest();

        $this->explodeName($attributes);

        $chef->update($attributes);

        return redirect('dashboard/chefs')->with('success', 'Le compte a bien été modifié!');
    }

    public function destroy(User $chef)
    {
        $this->authorize('update', $chef);

        $chef->delete();

        return redirect('/dashboard/chefs')->with('success', 'Le compte a bien été supprimé!');
    }

    protected function validateRequest()
    {
        return request()->validate([
            'name' => 'required',
            'group' => 'required'
        ]);
    }

    protected function explodeName(&$attributes)
    {
        $names = explode(' ', $attributes['name'], 2);
        unset($attributes['name']);
        $attributes['first_name'] = $names[0];
        $attributes['last_name'] = $names[1] ?? '';
    }
}
