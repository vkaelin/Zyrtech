<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function signIn($user = null, $role = [])
    {
        if($role) {
            $role = ['role_id' => \App\Role::where('name', $role)->first()->id];
        }
        $user = $user ?: factory('App\User')->create($role);

        $this->actingAs($user);
        return $user;
    }
}
