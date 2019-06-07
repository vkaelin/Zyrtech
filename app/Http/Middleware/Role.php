<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ... $roles)
    {
        // if (!Auth::check())
        // {
        //     return redirect('login');
        // }

        $user = Auth::user();

        if ($user->role->name === 'admin') {
            return $next($request);
        }

        foreach ($roles as $role) {
            if ($user->role->name === $role) {
                return $next($request);
            }
        }

        return redirect('login');
    }
}
