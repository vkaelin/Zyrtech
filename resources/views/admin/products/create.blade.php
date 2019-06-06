@extends('layouts.admin')

@section('content')

<h1 class="text-xl font-bold mb-6">Créer un produit</h1>

<div class="max-w-lg">
    <form method="POST" action="/admin/products/" enctype="multipart/form-data">
        @csrf

        <!-- NAME -->
        <label class="block mb-4">
            <span class="text-gray-700">Nom</span>
            <input class="form-input mt-1 block w-full" required type="text" name="name">
        </label>
        @if ($errors->has('name'))
        <div class="text-red-500 text-xs italic my-4">
            {{ $errors->first('name')}}
        </div>
        @endif

        <!-- TYPE  -->
        <div class="block mb-4">
            <span class="text-gray-700">Type :</span>
            @foreach ($data['types'] as $type)
            <div class="mt-2">
                <div class="mb-2">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio text-indigo-600" name="type_id" required
                            value="{{$type->id}}">
                        <span class="ml-2">{{$type->name}}</span>
                    </label>
                </div>
            </div>
            @endforeach
        </div>
        @if ($errors->has('type_id'))
        <div class="text-red-500 text-xs italic my-4">
            {{ $errors->first('type_id')}}
        </div>
        @endif

        <!-- PERIOD  -->
        <div class="block mb-4">
            <label class="block">
                <span class="text-gray-700">Période :</span>
                <select class="form-select block w-full mt-1" name="period_id" required>
                    @foreach ($data['periods'] as $period)
                    <option value="{{$period->id}}">
                        {{$period->name}}
                    </option>
                    @endforeach
                </select>
            </label>
        </div>
        @if ($errors->has('period_id'))
        <div class="text-red-500 text-xs italic my-4">
            {{ $errors->first('period_id')}}
        </div>
        @endif

        <!-- IMAGE -->

        <label class="block mb-4">
            <span class="text-gray-700">Image</span>
            <input type="file" class="form-input mt-1 block w-full" required type="text" name="image_src">
        </label>
        @if ($errors->has('image_src'))
        <div class="text-red-500 text-xs italic my-4">
            {{ $errors->first('image_src')}}
        </div>
        @endif

        <button class="bg-green-400 rounded py-2 px-4 text-white">Créer</button>
    </form>
</div>


@endsection