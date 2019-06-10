@extends('layouts.dashboard')

@section('content')

<h1 class="text-xl font-bold mb-6">Créer un compte chef</h1>

<div class="max-w-lg">
    <form method="POST" action="/dashboard/chefs">
        @csrf

        <label class="block mb-4">
            <span class="text-gray-700">Nom</span>
            <input class="form-input mt-1 block w-full" type="text" name="name">
        </label>

        <div class="mb-6">
            <span class="text-gray-700">Type</span>
            <div class="mt-2">
                <div>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio text-blue-600" name="group" value="0" checked>
                        <span class="ml-2">Individuel</span>
                    </label>
                </div>
                <div>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio text-blue-600" name="group" value="1">
                        <span class="ml-2">Groupe</span>
                    </label>
                </div>
            </div>
        </div>

        <button class="bg-green-400 rounded py-2 px-4 text-white">Créer</button>
    </form>
</div>

@endsection