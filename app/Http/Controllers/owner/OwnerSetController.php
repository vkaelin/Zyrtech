<?php

namespace App\Http\Controllers\Owner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Set;
use App\User;

class OwnerSetController extends Controller
{
    public function index()
    {
        $sets = auth()->user()->sets()
            ->paginate(10);

        return view('owner.sets.index', compact('sets'));
    }

    public function create()
    {
        $chefs = auth()->user()->chefs()
            ->orderBy('first_name')
            ->orderBy('last_name')
            ->get();

        $products = Product::orderBy('name')->get();

        return view('owner.sets.create', compact('chefs', 'products'));
    }

    public function show(Set $set)
    {
        return view('owner.sets.show', compact('set'));
    }

    public function store()
    {
        $attributes = request()->validate([
            'chef' => 'required',
            'products' => 'required|array|min:1'
        ]);

        $code = str_random(10);
        do {
            $code = str_random(10);
            $set_code = Set::where('code', $code)->get();
        } while (!$set_code->isEmpty());

        $set = auth()->user()->sets()->create([
            'chef_id' => $attributes['chef'],
            'code' => $code
        ]);

        $set->products()->attach($attributes['products']);

        return redirect('/dashboard/sets');
    }

    public function edit(Set $set)
    {
        $this->authorize('update', $set);

        $set->loadMissing('chef');

        $chefs = auth()->user()->chefs;
        $products = Product::all();

        return view('owner.sets.edit', compact('set', 'chefs', 'products'));
    }

    public function update(Set $set)
    {
        $this->authorize('update', $set);

        // Update de l'activation du Set
        if (!request()->wantsJson()) {
            $state = request('active') ? true : false;
            $set->update(['active' => $state]);
            return back();
        }

        $attributes = request()->validate([
            'chef' => 'required',
            'products' => 'required|array|min:1'
        ]);

        $chef = User::find(request('chef'));
        $set->chef()->associate($chef)->save();

        $idProducts = array_column($attributes['products'], 'id');
        $set->products()->detach();
        $set->products()->attach($idProducts);

        return ['message' => '/dashboard/sets'];
    }

    public function destroy(Set $set)
    {
        $this->authorize('update', $set);

        $set->delete();

        return redirect('/dashboard/sets');
    }
}
