@extends('layouts.dashboard')

@section('content')

<h1 class="text-xl font-bold mb-6">Créer un set</h1>

<div class="max-w-lg">
    <form method="POST" action="/dashboard/sets">
        @csrf

        <label class="block mb-4">
            <span class="text-gray-700">Chef(s)</span>
            <select class="form-multiselect block w-full mt-1" name="chefs[]" multiple>
                @foreach ($chefs as $chef)
                <option value="{{ $chef->id }}">{{ $chef->first_name }} {{ $chef->last_name }}</option>
                @endforeach
            </select>
        </label>

        <label class="block mb-4">
            <span class="text-gray-700">Produit(s)</span>
            <select class="form-multiselect block w-full mt-1" name="products[]" multiple>
                @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </label>

        <button class="bg-green-400 rounded py-2 px-4 text-white">Créer</button>
    </form>
</div>

@endsection