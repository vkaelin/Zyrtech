<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class ChefLoginController extends Controller
{
    public function login()
    {
        $owner = User::where('code', request('code'))->get();

        if(!$owner->isEmpty()) {
            Auth::login($owner->first());
            return ['message' => '/home'];
        }

        return response()->json(['errors' => ['code' => 'Compte non trouvé.']], 404);
    }
}
