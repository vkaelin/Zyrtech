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
        $this->authorize('manage', auth()->user()->role);

        return view('owner.sets.index');
    }

    public function create()
    {
        $this->authorize('manage', auth()->user()->role);

        $chefs = auth()->user()->chefs;
        $products = Product::all();

        return view('owner.sets.create', compact('chefs','products'));
    }

    public function store()
    {
        $this->authorize('manage', auth()->user()->role);

        $attributes = request()->validate([
            'chefs' => 'required|array|min:1',
            'products' => 'required|array|min:1'
        ]);

        $set = auth()->user()->sets()->create();

        foreach ($attributes['chefs'] as $chef) {
            $set->chefs()->attach(['id' => $chef]);
        }

        foreach ($attributes['products'] as $product) {
            $set->products()->attach(['id' => $product]);
        }

        return redirect('/dashboard/sets');
    }
}
