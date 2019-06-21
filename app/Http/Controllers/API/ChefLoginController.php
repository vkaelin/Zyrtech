<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Set;
use Illuminate\Support\Facades\Auth;

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
            $chefSet->first()->chef->currentSet = $chefSet->first();
            return ['message' => '/sets'];
        }

        return response()->json(['errors' => ['code' => 'Compte non trouvé ou inactif.']], 404);
    }
}
