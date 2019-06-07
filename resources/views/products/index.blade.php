@extends('layouts.app')

@section('content')
<h1>Product page</h1>

<ul>
    @foreach ($products as $product)
    <li>
        @foreach ($product->labels as $label)
        <p>{{$label->name}}</p>

        @endforeach
        <img src="{{$product->getImage()}}" alt="{{$product->name}}">
        <h3>
            Nom : {{$product->name}}
        </h3>
    </li>
    @endforeach
</ul>

@endsection