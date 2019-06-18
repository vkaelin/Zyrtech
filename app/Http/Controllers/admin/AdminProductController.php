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
        $products = Product::paginate(10);

        $products->loadMissing(['type', 'period', 'labels']);

        return view('admin.products.index', compact('products'));
    }

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

    public function store(Request $request)
    {
        $validatedAttributes = request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3'],
            'type_id' => ['required'],
            'period_id' => ['required'],
            'video_link' => 'sometimes',
            'image_src' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        $imageName = $request->file('image_src')->getClientOriginalName();
        $validatedAttributes['image_src'] = $imageName;
        request()->image_src->move(storage_path('app/public'), $imageName);

        $product = Product::create($validatedAttributes);

        if (request('multiLabels') != null) {
            $product->labels()->attach(array_values(request('multiLabels')));
        }

        return redirect('/admin/products')->with('success', 'Le produit a bien été créé!');
    }

    public function edit(Product $product)
    {
        $types = \App\Type::all();
        $periods = \App\Period::all();
        $labels = \App\Label::all();
        $productLabels = \App\ProductLabel::where('product_id', $product->id)->get();

        $data = [
            'product' => $product,
            'types' => $types,
            'periods' => $periods,
            'labels' => $labels,
            'productLabels' => $productLabels,
        ];

        return view('admin.products.edit', compact('data'));
    }

    public function update(Request $request, Product $product)
    {
        $validatedAttributes = request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3'],
            'type_id' => ['required'],
            'period_id' => ['required'],
            'video_link' => 'sometimes',
            'image_src' => 'image|mimes:jpeg,png,jpg'
        ]);

        if ($request->has('image_src')) {
            Storage::disk('public')->delete($product->image_src);
            $imageName = $request->file('image_src')->getClientOriginalName();

            $validatedAttributes['image_src'] = $imageName;

            request()->image_src->move(storage_path('app/public'), $imageName);
        }

        $product->labels()->detach();

        if (request('multiLabels') != null) {
            $product->labels()->attach(array_values(request('multiLabels')));
        }

        $product->update($validatedAttributes);

        return back()->with('success', 'Le produit a bien été modifié!');
    }

    public function destroy(Product $product)
    {
        Storage::disk('public')->delete($product->image_src);
        
        $product->delete();

        return redirect('/admin/products')->with('success', 'Le produit a bien été supprimé!');
    }
}
