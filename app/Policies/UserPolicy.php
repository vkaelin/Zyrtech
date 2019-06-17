<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the chef.
     *
     * @param  \App\User  $user
     * @param  \App\User  $chef
     * @return mixed
     */
    public function update(User $user, User $chef)
    {
        return $user->is($chef->owner);
    }
}
