@extends('layouts.owner.layout')

@section('content')

<h1 class="text-3xl font-bold">
        <a class="text-green-500 hover:text-green-600" href="/dashboard/sets">Sets</a>
        <span class="text-green-500"> / </span>
        <span>Créer</span>
    </h1>

<div class="mt-6 max-w-6xl bg-white rounded-lg shadow p-8">
    <form method="POST" action="/dashboard/sets">
        @csrf

        <label class="block max-w-lg mb-4">
            <span class="text-gray-700">Chef / Groupe</span>
            <select class="form-select block w-full mt-1 border-gray-400" name="chef">
                @foreach ($chefs as $chef)
                <option value="{{ $chef->id }}">{{ $chef->full_name }}</option>
                @endforeach
            </select>
        </label>

        <multiselect name="products[]" :data="{{ $products }}">
            <template v-slot:label>
                Produit(s)
            </template>
        </multiselect>

        <button class="mt-6 block ml-auto btn-primary">Créer le Set</button>
    </form>
</div>

@endsection