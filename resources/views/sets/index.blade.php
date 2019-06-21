@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    @if (auth()->user()->group)
    <h1 class="text-lg md:text-2xl font-bold mb-4">Produits assignés à votre groupe</h1>
    @else
    <h1 class="text-lg md:text-2xl font-bold mb-4">Vos Produits Assignés</h1>
    @endif
    <div class="flex flex-wrap">
        @if ($set)
        @foreach ($set->products as $product)
        @include('partials.product-card', ['chef' => 'true'])
        @endforeach
        @else
        <div class="mt-2 text-red-500 italic text-sm">
            Vous n'avez pas de set de produits assigné.
        </div>
        @endif
    </div>
</div>

@endsection