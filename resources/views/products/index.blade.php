@extends('layouts.app')

@section('content')

<div class="mx-auto container">
    <h1 class="text-3xl font-bold mb-2">Les Produits</h1>
    <div>
        <h2 class="text-2xl mb-2">Filtrer </h2>
    </div>
    <div class="flex flex-wrap">
        @foreach ($products as $product)
            @include('partials.product-card', ['chef' => false])
        @endforeach
    </div>
</div>

@endsection