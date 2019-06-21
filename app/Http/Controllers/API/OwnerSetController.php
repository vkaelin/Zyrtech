<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use App\Set;

class OwnerSetController extends Controller
{
    public function update(Set $set)
    {
        $this->authorize('update', $set);

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
}
