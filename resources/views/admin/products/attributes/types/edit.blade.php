@extends('layouts.admin.layout')

@section('content')

<h1 class="text-2xl font-bold">Editer le type {{$type->name}}</h1>
<div class="max-w-lg mt-2">
    <form method="POST" action="/admin/products/attributes/types/{{$type->id}}/edit">
        @method("PATCH")
        @csrf

        <h3 class="text-2xl mb-4">TYPE ID : {{$type->id}}</h3>

        <label class=" block mb-4">
            <span class="text-gray-700">Nom</span>
            <input class="form-input mt-1 block w-full" required type="text" name="name" value="{{$type->name}}">
        </label>
        @if ($errors->has('name'))
        <div class="text-red-500 text-xs italic my-4">
            {{ $errors->first('name')}}
        </div>
        @endif
        <button type="submit" class="bg-green-400 rounded py-2 px-4 text-white">Editer</button>
    </form>
</div>


@endsection