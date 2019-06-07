<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = \App\Product::all();

        return view('admin.products.index', compact('products'));
    }

    //GET la page de création
    public function create()
    {
        $types = \App\Type::all();
        $periods = \App\Period::all();
        $labels = \App\Label::all();

        $data = [
            'types' => $types,
            'periods' => $periods,
            'labels' => $labels,
        ];

        return view('admin.products.create', compact('data'));
    }

    //Méthode POST pour la création
    public function store(Request $request)
    {
        $validatedAttributes = request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3'],
            'type_id' => ['required'],
            'period_id' => ['required'],
            'image_src' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        $imageName = $request->file('image_src')->getClientOriginalName();

        $validatedAttributes['image_src'] = $imageName;

        request()->image_src->move(storage_path('app/public'), $imageName);

        Product::create($validatedAttributes);

        return redirect('/admin/products');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //On utilisera paginate par la suite.
        $types = \App\Type::all();
        $periods = \App\Period::all();
        $labels = \App\Label::all();
        $productLabel = \App\ProductLabel::where('product_id', $product->id)->get();

        $data = [
            'product' => $product,
            'types' => $types,
            'periods' => $periods,
            'labels' => $labels,
            'productLabel' => $productLabel,
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
        //Validation de la requête
        $validatedAttributes = request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3'],
            'type_id' => ['required'],
            'period_id' => ['required'],
            'image_src' => 'image|mimes:jpeg,png,jpg'
        ]);

        if ($request->has('image_src')) {
            Storage::disk('public')->delete($product->image_src);
            $imageName = $request->file('image_src')->getClientOriginalName();

            $validatedAttributes['image_src'] = $imageName;

            request()->image_src->move(storage_path('app/public'), $imageName);
        }


        //On fera plusieures requêtes via Axios, ce sera plus simple pour les labels.
        // $productLabel = \App\ProductLabel::where('product_id', $product->id)->get();
        // dd($product->productLabel);
        // $product->productLabel->update(request(['label_id']));

        $product->update($validatedAttributes);
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
        Storage::disk('public')->delete($product->image_src);
        $product->delete();

        return redirect('/admin/products');
    }
}
