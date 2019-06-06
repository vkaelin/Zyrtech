<?php

function redirectAfterAuth()
{
    $role = auth()->user()->role->name;

    // Check user role
    switch ($role) {
        case 'admin':
            return '/admin/users';
            break;
        case 'owner':
            return '/dashboard/chefs';
            break;
        default:
            return '/login';
            break;
    }
}

?>
