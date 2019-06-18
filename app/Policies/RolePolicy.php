<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    public function evaluate(User $user)
    {
        return $user->role->name === 'chef'; 
    }

    public function manage(User $user)
    {
        return $user->role->name === 'admin' || $user->role->name === 'owner'; 
    }

    public function administrate(User $user)
    {
        return $user->role->name === 'admin';
    }
}
