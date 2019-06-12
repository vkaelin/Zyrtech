<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class RatingController extends Controller
{
    public function store(Product $product)
    {
        $attributes = request()->validate([
            'value' => 'required|min:1|max:10'
        ]);
        $attributes['product_id'] = $product->id;

        $setsWithProduct = auth()->user()->allSetsWithProduct($product);

        foreach ($setsWithProduct as $set) {
            $set->ratings()->create($attributes);
        }

        return back();
    }
}
