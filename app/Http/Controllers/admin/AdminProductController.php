<?php

namespace App\Http\Controllers\admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminProductController extends Controller
{
    public function index()
    {
        $this->authorize('administrate', auth()->user()->role);

        $products = \App\Product::all();

        return view('admin.products.index', compact('products'));
    }

    //GET la page de création
    public function create()
    {
        $this->authorize('administrate', auth()->user()->role);

        return view('admin.products.create');
    }

    //Méthode POST pour la création
    public function store()
    {
        $this->authorize('administrate', auth()->user()->role);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $this->authorize('administrate', auth()->user()->role);

        $types = \App\Type::all();
        $labels = \App\Label::all();

        // $types = $types->reduce(function ($carry, $type) {
        //     return $type->name;
        // });

        // $labels = $labels->reduce(function ($carry, $label) {
        //     return $label->name;
        // });


        $data = [
            'product' => $product,
            'types' => $types,
            'labels' => $labels
        ];

        //dd($data[0]->name);

        return view('admin.products.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update(request(['name', 'type_id']));
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
