<?php

namespace App\Http\Controllers;

use App\Product;

class RatingController extends Controller
{
    public function store(Product $product)
    {
        $attributes = request()->validate([
            'value' => 'required|min:1|max:10'
        ]);
        $attributes['product_id'] = $product->id;

        auth()->user()->currentSet->ratings()->create($attributes);

        return back()->with('success', "Evaluation réussie!");
    }
}
