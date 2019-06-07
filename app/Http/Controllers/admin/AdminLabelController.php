<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Label;

class AdminLabelController extends Controller
{
    public function create()
    {
        return view('admin.products.attributes.labels.create');
    }

    public function store(Request $request)
    {
        $validatedAttributes = request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
        ]);

        Label::create($validatedAttributes);

        return redirect('/admin/products/attributes');
    }

    public function edit(Label $label)
    {
        return view('admin.products.attributes.labels.edit', compact('label'));
    }

    public function update(Request $request, Label $label)
    {
        $validatedAttributes = request()->validate([
            'name' => ['required', 'min:3', 'max:255']
        ]);

        $label->update($validatedAttributes);
        return back();
    }

    public function destroy(Label $label)
    {
        $label->delete();

        return redirect('admin/products/attributes');
    }
}
