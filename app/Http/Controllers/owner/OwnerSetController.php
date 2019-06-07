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
        return view('owner.sets.index');
    }

    public function create()
    {
        $chefs = auth()->user()->chefs;
        $products = Product::all();

        return view('owner.sets.create', compact('chefs','products'));
    }

    public function store()
    {
        $attributes = request()->validate([
            'chefs' => 'required|array|min:1',
            'products' => 'required|array|min:1'
        ]);

        $set = auth()->user()->sets()->create();

        $set->chefs()->attach($attributes['chefs']);

        $set->products()->attach($attributes['products']);

        return redirect('/dashboard/sets');
    }

    public function edit(Set $set)
    {
        $this->authorize('update', $set);

        $chefs = auth()->user()->chefs;
        $products = Product::all();

        return view('owner.sets.edit', compact('set', 'chefs', 'products'));
    }

    public function update(Set $set)
    {
        $this->authorize('update', $set);
    }

    public function destroy(Set $set)
    {
        $this->authorize('update', $set);

        $set->delete();

        return redirect('/dashboard/sets');
    }
}
