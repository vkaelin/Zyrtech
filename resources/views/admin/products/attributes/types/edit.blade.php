@extends('layouts.admin.layout')

@section('content')

<h1 class="text-3xl font-bold">
    <a class="text-green-500 hover:text-green-600" href="/admin/products/attributes">Type</a>
    <span class="text-green-500"> / </span>
    <span class="text-gray-900">Modifier</span>
</h1>

<div class="mt-6 max-w-lg bg-white rounded-lg shadow p-8">
    <form method="POST" action="/admin/products/attributes/types/{{$type->id}}/edit">
        @method("PATCH")
        @csrf

        <label class=" block mb-4">
            <span class="text-gray-700">Nom</span>
            <input class="form-input mt-1 block w-full" required type="text" name="name" value="{{$type->name}}">
        </label>
        @if ($errors->has('name'))
        <div class="text-red-500 text-xs italic my-4">
            {{ $errors->first('name')}}
        </div>
        @endif
        <button type="submit" class="mt-6 block ml-auto btn-primary">Editer</button>
    </form>
</div>


@endsection