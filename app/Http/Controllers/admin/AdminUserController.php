<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('admin.users.index');
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store()
    {
    }
}
