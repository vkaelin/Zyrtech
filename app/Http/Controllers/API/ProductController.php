<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    public function search()
    {
        if ($search = request('search')) {
            $products = Product::where(function ($query) use ($search) {
                $query->where('name', 'LIKE', "%$search%")
                    ->orWhere('description', 'LIKE', "%$search%")
                    ->orWhereHas('type', function ($query) use ($search) {
                        $query->where('name', 'LIKE', "%$search%");
                    })
                    ->orWhereHas('period', function ($query) use ($search) {
                        $query->where('name', 'LIKE', "%$search%");
                    })
                    ->orWhereHas('labels', function ($query) use ($search) {
                        $query->where('name', 'LIKE', "%$search%");
                    });
            })->paginate(10);

            $products->loadMissing(['type', 'period', 'labels']);
            
            return $products;
        } else {
            return Product::paginate(10);
        }
    }
}
