@extends('layouts.app')

@section('content')

<div class="mx-auto container px-4">
    <h1 class="text-xl md:text-2xl lg:text-3xl font-bold mb-4">Les Produits</h1>
    <div class="flex flex-wrap">
        @foreach ($products as $product)
            @include('partials.product-card', ['chef' => false])
        @endforeach
    </div>
</div>

@endsection