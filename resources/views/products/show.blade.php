@extends('layouts.app')

@section('content')

<h1>Product show page</h1>

<p>{{$product->name}}</p>
<p>{{$product->getTypeName()}}</p>
<p>{{$product->getPeriodName()}}</p>
@foreach ($product->labels as $label)
<p>{{$label->name}}</p>
@endforeach
<p>{{$product->getStarAverage()}}</p>

<product-star :product="{{$product}}" :stars="{{$product->getStarAverage()}}" :readonly="false">
</product-star>

<div class="mt-8">
    @if (Auth::check() && auth()->user()->canRateProduct($product))

    @if ($product->alreadyRatedBySetChef(auth()->user()))
    <span>Produit évalué</span>
    @else 
    <form class="max-w-sm" method="POST" action="/products/{{ $product->id }}/rating">
        @csrf

        <label class="block">
            <span class="text-gray-700">Note</span>
            <select class="form-select block w-full mt-1" name="value">
                @for ($i = 1; $i <= 10; $i++) <option>{{ $i }}</option>
                    @endfor
            </select>
        </label>
        <button class="bg-green-500 text-white px-4 py-2 mt-2 rounded hover:bg-green-400" type="submit">Evaluer</button>
    </form>

    @endif
    @endif
</div>

@endsection