@extends('layouts.dashboard')

@section('content')

<h1 class="text-xl font-bold mb-6">Modifier le set  {{ $set->id }}</h1>

<edit-set
    :set="{{ $set->toJson() }}"
    :selected-products="{{ $set->products->toJson() }}"
    :selected-chefs="{{ $set->chefs->toJson() }}"
    :chefs="{{ $chefs->toJson() }}"
    :products="{{ $products->toJson() }}"
>
</edit-set>

{{-- <div class="max-w-lg">
    <form method="POST" action="{{ $set->path() }}">
        @csrf
        @method('PATCH')

        <label class="block mb-4">
            <span class="text-gray-700">Chefs dans le set</span>
            <select class="form-multiselect block w-full mt-1" name="chefs[]" multiple>
                @foreach ($set->chefs as $chef)
                <option value="{{ $chef->id }}">{{ $chef->first_name }} {{ $chef->last_name }}</option>
                @endforeach
            </select>
        </label>

        @foreach ($set->chefs as $chef)
            <div
                class="inline-flex items-center bg-green-500 px-2 py-1 mb-2 text-xs text-white rounded-full cursor-pointer"
                id="{{ $chef->id }}"
            >
                <span>{{ $chef->first_name }} {{ $chef->last_name }}</span>
                <span class="ml-2 font-bold">x</span>
            </div>
        @endforeach

        <div class="mb-4">
            <p class="text-lg font-bold">Autres chefs</p>
            @foreach ($chefs as $chef)
                @if (! $set->chefs->contains($chef))
                    <p>{{ $chef->first_name }} {{ $chef->last_name }}</p>
                @endif
            @endforeach
        </div>

        <label class="block mb-4">
            <span class="text-gray-700">Produits dans le set</span>
            <select class="form-multiselect block w-full mt-1" name="products[]" multiple>
                @foreach ($set->products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </label>

        <div class="mb-4">
            <p class="text-lg font-bold">Autres produits</p>
            @foreach ($products as $product)
                @if (! $set->products->contains($product))
                    <p>{{ $product->name }}</p>
                @endif
            @endforeach
        </div>

        <button class="bg-green-400 rounded py-2 px-4 text-white">Modifier</button>
    </form>
</div> --}}

@endsection