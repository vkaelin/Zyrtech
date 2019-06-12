<?php

namespace App\Http\Controllers;

use App\Star;
use Illuminate\Http\Request;
use App\Product;

class StarController extends Controller
{

    public function store(Product $product)
    {
        $validateArguments = request()->validate([
            'star' => 'required '
        ]);

        $star = $validateArguments['star'];

        Star::create([
            'value' => $star,
            'product_id' => $product->id
        ]);

        return ['message' => "/products/{$product->id}"];
    }
}
