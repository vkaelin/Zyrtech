@extends('layouts.app')

@section('content')


<div class="mb-8">

    <a href="/admin/products/create" class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded">
        Créer un produit
    </a>
    <ul class="pb-10">
        @foreach ($products as $product)
        <h2 class="mt-6 mb-1 text-2xl">Produit ID {{$product->id}}</h2>
        <li class="mb-6">
            <p class="mb-1"><strong>Nom : </strong>{{$product->name}}</p>
            <p class="mb-1"><strong>Type : </strong>{{$product->getTypeName()}}</p>
            <p class="mb-1"><strong>Période : </strong>{{$product->getPeriodName()}}</p>
            <p class="mb-4"><strong>Label : </strong>{{$product->getLabelName()}}</p>

            <form method="GET" action="/admin/products/{{$product->id}}/edit">
                @csrf
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Editer le produit
                </button>
            </form>
            <form method="POST" action="/admin/products/{{$product->id}}">
                @method('DELETE')
                @csrf
                <button class="mt-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    Supprimer le produit
                </button>
            </form>
        </li>
        @endforeach
    </ul>


</div>



@endsection