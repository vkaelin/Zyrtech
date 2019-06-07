@extends('layouts.admin')

@section('content')

<h1 class="text-2xl font-bold">Ajouter une période</h1>
<div class="max-w-lg mt-2">
    <form method="POST" action="/admin/products/attributes/periods/">
        @csrf
        <label class=" block mb-4">
            <span class="text-gray-700">Nom</span>
            <input class="form-input mt-1 block w-full" required type="text" name="name"
                placeholder="Tapez votre période ici...">
        </label>
        @if ($errors->has('name'))
        <div class="text-red-500 text-xs italic my-4">
            {{ $errors->first('name')}}
        </div>
        @endif
        <button type="submit" class="bg-green-400 rounded py-2 px-4 text-white">Créer</button>
    </form>
</div>

@endsection