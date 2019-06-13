<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Set;

class ChefLoginController extends Controller
{
    public function login()
    {
        $chefSet = Set::where([
            'code' => request('code'),
            'active' => true
        ])->get();

        if (!$chefSet->isEmpty()) {
            Auth::login($chefSet->first()->chef);
            return ['message' => '/sets'];
        }

        return response()->json(['errors' => ['code' => 'Compte non trouvé ou inactif.']], 404);
    }
}
