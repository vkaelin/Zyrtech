<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

class ChefController extends Controller
{
    public function search()
    {
        if ($search = request('search')) {
            $chefs = auth()->user()->chefs()->where(function ($query) use ($search) {
                $query->where('first_name', 'LIKE', "%$search%")
                    ->orWhere('last_name', 'LIKE', "%$search%");
            })->paginate(10);
            return $chefs;
        } else {
            return auth()->user()->chefs()->paginate(10);
        }
    }
}
