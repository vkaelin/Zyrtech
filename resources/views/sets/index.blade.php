@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Produits assignés</h1>

<ul>

    <ul class="mb-3">
        @foreach ($set->products as $product)
        <li class="flex">
            <a class="hover:font-bold" href="/products/{{ $product->id }}"> - {{ $product->name }}</a>
            @if ($set->productAlreadyRated($product))
            <span class="ml-2">[Evalué]</span>
            @else
            <span class="ml-2">[A évaluer]</span>
            @endif
        </li>
        @endforeach
    </ul>
</ul>


@endsection