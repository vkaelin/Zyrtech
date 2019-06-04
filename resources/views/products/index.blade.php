@extends('layouts.app')

@section('content')
<h1>Product page</h1>

<ul>
    @foreach ($products as $product)
    <li>
        <h3>
            Nom : {{$product->name}}
        </h3>
        <p>
            Type Id : {{$product->type_id}}
        </p>
    </li>
    @endforeach
</ul>

@endsection