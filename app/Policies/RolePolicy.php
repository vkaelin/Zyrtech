<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    public function manage(User $user)
    {
        return $user->role->name === 'admin' || $user->role->name === 'owner'; 
    }

    public function administrate(User $user)
    {
        return $user->role->name === 'admin';
    }
}
