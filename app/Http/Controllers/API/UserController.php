<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function search()
    {
        if ($search = request('search')) {
            $users = User::where(function ($query) use ($search) {
                $query->where('first_name', 'LIKE', "%$search%")
                    ->orWhere('last_name', 'LIKE', "%$search%")
                    ->orWhereHas('role', function ($query) use ($search) {
                        $query->where('name', 'LIKE', "%$search%");
                    });
            })->paginate(10);

            $users->loadMissing('role');
            
            return $users;
        } else {
            return User::paginate(10);
        }
    }
}
