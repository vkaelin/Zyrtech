<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    public function index()
    {
        return view('dashboard.users.index');
    }

    public function create()
    {
        return view('dashboard.users.create');
    }

    public function store()
    {

    }
}
