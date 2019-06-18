@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    @if (auth()->user()->group)
    <h1 class="text-2xl font-bold mb-4">Produits assignés à votre groupe</h1>
    @else
    <h1 class="text-2xl font-bold mb-4">Vos Produits Assignés</h1>
    @endif
    <div class="flex flex-wrap">
        @foreach ($set->products as $product)
        @include('partials.product-card', ['chef' => 'true'])
        @endforeach
    </div>
</div>

@endsection