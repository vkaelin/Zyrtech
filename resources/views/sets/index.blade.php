@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Vos sets assignés</h1>

<ul>
    @forelse ($sets as $set)
    <p>Produits: </p>
    <ul class="mb-3">
        @foreach ($set->products as $product)
            <li>
                <a class="hover:font-bold" href="/products/{{ $product->id }}"> - {{ $product->name }}</a>
            </li>
        @endforeach
    </ul>
    @empty
    <div>Aucun set ne vous a été assigné.</div>
    @endforelse
</ul>


@endsection