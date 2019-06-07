<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminAttributeController extends Controller
{
    public function index()
    {
        $types = \App\Type::all();
        $periods = \App\Period::all();
        $labels = \App\Label::all();

        $data = [
            'types' => $types,
            'periods' => $periods,
            'labels' => $labels,
        ];

        return view('admin.products.attributes.index', compact('data'));
    }
}
