<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Star;
use App\Product;
use Illuminate\Support\Facades\Cookie;

class StarController extends Controller
{
    public function store(Product $product)
    {
        if (Cookie::has('voting_cookie_id' . $product->id)) {
            return ['message' => "/products/{$product->id}"];
        } else {

            $validateArguments = request()->validate([
                'star' => 'required '
            ]);

            $star = $validateArguments['star'];

            Star::create([
                'value' => $star,
                'product_id' => $product->id
            ]);

            $cookieName = 'voting_cookie_id' . $product->id;

            Cookie::queue($cookieName, $star, 2628000, null, null, false, false);

            return ['message' => "/products/{$product->id}"];
        }
    }
}
