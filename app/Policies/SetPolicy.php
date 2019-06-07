<?php

namespace App\Policies;

use App\User;
use App\Set;
use Illuminate\Auth\Access\HandlesAuthorization;

class SetPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the set.
     *
     * @param  \App\User  $user
     * @param  \App\Set  $set
     * @return mixed
     */
    public function update(User $user, Set $set)
    {
        return $user->is($set->owner);
    }
}
