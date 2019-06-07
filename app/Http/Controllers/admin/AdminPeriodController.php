<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Period;

class AdminPeriodController extends Controller
{
    public function create()
    {
        return view('admin.products.attributes.periods.create');
    }

    public function store(Request $request)
    {
        $validatedAttributes = request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
        ]);

        Period::create($validatedAttributes);

        return redirect('/admin/products/attributes');
    }

    public function edit(Period $period)
    {
        return view('admin.products.attributes.periods.edit', compact('period'));
    }

    public function update(Request $request, Period $period)
    {
        $validatedAttributes = request()->validate([
            'name' => ['required', 'min:3', 'max:255']
        ]);

        $period->update($validatedAttributes);
        return back();
    }

    public function destroy(Period $period)
    {
        $period->delete();

        return redirect('admin/products/attributes');
    }
}
