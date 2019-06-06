@extends('layouts.dashboard')

@section('content')

<h1 class="text-xl font-bold mb-6">Créer un set</h1>

<div class="max-w-lg">
    <form method="POST" action="/dashboard/sets">
        @csrf

        <label class="block mb-4">
            <span class="text-gray-700">Prénom</span>
            <input class="form-input mt-1 block w-full" type="text" name="first_name">
        </label>

        <label class="block mb-4">
            <span class="text-gray-700">Nom</span>
            <input class="form-input mt-1 block w-full" type="text" name="last_name">
        </label>

        <button class="bg-green-400 rounded py-2 px-4 text-white">Créer</button>
    </form>
</div>

@endsection