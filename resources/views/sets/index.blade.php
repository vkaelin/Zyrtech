@extends('layouts.app')

@section('content')
<h1>Vos sets assignés</h1>

<ul>
    @forelse ($sets as $set)
    <h3>
        Id : {{$set->id}}
    </h3>
    <p>Produits: </p>
    <ul>
        @foreach ($set->products as $product)
            <li> - {{ $product->name }}</li>
        @endforeach
    </ul>
    @empty
    <div>Aucun set ne vous a été assigné.</div>
    @endforelse
</ul>


@endsection