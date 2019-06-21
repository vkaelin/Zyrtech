<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(12);
        return view('products/index', compact('products'));
    }

    public function show(Product $product)
    {
        $comments = $product->comments()->paginate(10);

        return view('products.show', compact('product', 'comments'));
    }
}
