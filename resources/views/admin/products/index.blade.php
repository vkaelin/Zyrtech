@extends('layouts.app');

@section('content')

<h1>Admin product index</h1>

<ul class="pb-10">
    @foreach ($products as $product)
    <h2 class="mt-6 mb-1 text-2xl">Produit ID {{$product->id}}</h2>
    <li class="mb-6">
        <p class="mb-1"><strong>Nom : </strong>{{$product->name}}</p>
        <p class="mb-1"><strong>Type : </strong>{{$product->getTypeName()}}</p>
        <p class="mb-4"><strong>Label : </strong>{{$product->getLabelName()}}</p>

        <a href="/admin/products/{{$product->id}}/edit"
            class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit product</a>
    </li>
    @endforeach
</ul>

<a href="" class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded">Create product</a>


@endsection