@extends('layouts.app')

@section('content')

<div class="mx-auto container">
    <h1 class="text-3xl font-bold mb-2">Les Produits</h1>
    <div>
        <h2 class="text-2xl mb-2">Filtrer </h2>
    </div>
    <div class="flex flex-wrap">
        @foreach ($products as $product)
        <a href="/products/{{$product->id}}"
            class="w-64 max-h-xs rounded overflow-hidden shadow-lg mr-4 mt-4 hover:shadow-xl border hover:border-green-300 cursor-pointer">
            <div class="w-full h-32 bg-white">
                <img class="object-contain w-full h-32" src="{{$product->getImage()}}" alt="{{$product->image_src}}">
            </div>
            <div class="px-6 pt-2">
                <span class="inline-block italic text-xs mb-1">
                    {{$product->getTypeName()}} > {{$product->getPeriodName()}}
                </span>

                <div class="mb-1 flex justify-between">
                    <span class="font-bold text-xl">{{$product->name}}</span>
                    <div>
                        <product-star :stars="{{$product->getStarNote()}}" :readonly="true"></product-star>
                        <span class="mt-1 block text-xs text-gray-500 text-right">{{$product->stars->count()}}
                            {{$product->stars->count() <= 1 ? 'vote' : 'votes'}}
                        </span>
                    </div>
                </div>
            </div>
            <div class="px-6 pt-2 pb-4">
                @forelse ($product->labels as $label)
                <span class="inline-block bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                    {{$label->name}}
                </span>
                @empty
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                    Aucun label
                </span>
                @endforelse
            </div>
        </a>
        @endforeach
    </div>
</div>

@endsection