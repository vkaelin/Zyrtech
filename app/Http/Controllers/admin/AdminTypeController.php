<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Type;

class AdminTypeController extends Controller
{
    public function create()
    {
        return view('admin.products.attributes.types.create');
    }

    public function store(Request $request)
    {
        $validatedAttributes = request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
        ]);

        Type::create($validatedAttributes);

        return redirect('/admin/products/attributes');
    }

    public function edit(Type $type)
    {
        return view('admin.products.attributes.types.edit', compact('type'));
    }

    public function update(Request $request, Type $type)
    {
        $validatedAttributes = request()->validate([
            'name' => ['required', 'min:3', 'max:255']
        ]);

        $type->update($validatedAttributes);
        return back();
    }

    public function destroy(Type $type)
    {
        $type->delete();

        return redirect('admin/products/attributes');
    }
}
