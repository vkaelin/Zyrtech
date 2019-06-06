@extends('layouts.app')

@section('content')
<h1>Product page</h1>

<ul>
    @foreach ($products as $product)
    <li>
        <h3>
            Nom : {{$product->name}}
        </h3>
    </li>
    @endforeach
</ul>

@endsection