@extends('layouts.owner.layout')

@section('content')

<h1 class="text-3xl font-bold">
    <a class="text-green-500 hover:text-green-600" href="/dashboard/chefs">Chefs</a>
    <span class="text-green-500"> / </span>
    <span>Modifier</span>
</h1>

<div class="mt-6 max-w-lg bg-white rounded-lg shadow p-8">
    <form method="POST" action="/dashboard/chefs/{{ $chef->id }}">
        @csrf
        @method('PATCH')

        <label class="block">
            <span class="text-gray-700">Nom</span>
            <input class="form-input mt-1 block w-full border-gray-400" type="text" name="name"
                value="{{ $chef->first_name }} {{ $chef->last_name }}">
        </label>

        <div class=" mt-4">
            <span class="text-gray-700">Type</span>
            <div class="mt-2">
                <div>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio text-green-600 border-gray-400" name="group" value="0"
                            {{ $chef->group ? '' : 'checked' }}>
                        <span class="ml-2">Individuel</span>
                    </label>
                </div>
                <div class="mt-2">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio text-green-600 border-gray-400" name="group" value="1"
                            {{ $chef->group ? 'checked' : '' }}>
                        <span class="ml-2">Groupe</span>
                    </label>
                </div>
            </div>
        </div>

        <button class="mt-6 block ml-auto btn-primary">Modifier le Compte</button>
    </form>
</div>

@endsection