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

        //Créer la star 

        //return ['message' => $product];
    }
}
