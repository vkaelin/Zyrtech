@extends('layouts.app');

@section('content')
<div class="max-w-lg">
    <form method="POST" action="/admin/products/{{$data['product']->id}}/edit">
        @method("PATCH")
        @csrf
        <h3 class="text-2xl mb-4">PRODUCT ID : {{$data['product']->id}}</h3>

        <label class=" block mb-4">
            <span class="text-gray-700">Nom</span>
            <input class="form-input mt-1 block w-full" required type="text" name="name"
                value="{{$data['product']->name}}">
        </label>

        <div class="block mb-4">
            <span class="text-gray-700">Product Type :</span>
            @foreach ($data['types'] as $type)
            <div class="mt-2">
                <div class="mb-2">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio text-indigo-600" name="type_id" value="{{$type->id}}"
                            {{$type->id === $data['product']->type_id ? 'checked' : ''}}>
                        <span class="ml-2">{{$type->name}}</span>
                    </label>
                </div>
            </div>
            @endforeach
        </div>
        <div class="block mb-4">
            <label class="block">
                <span class="text-gray-700">Product Label :</span>
                <select class="form-select block w-full mt-1">
                    @foreach ($data['labels'] as $label)
                    <option>{{$label->name}}</option>
                    @endforeach
                </select>
            </label>
        </div>

        <button type="submit" class="bg-green-400 rounded py-2 px-4 text-white">Editer</button>
    </form>
</div>


@endsection