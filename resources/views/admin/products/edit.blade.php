@extends('layouts.app')

@section('content')
<div class="max-w-lg">
    <form method="POST" action="/admin/products/{{$data['product']->id}}/edit">
        @method("PATCH")
        @csrf

        <h3 class="text-2xl mb-4">PRODUCT ID : {{$data['product']->id}}</h3>
        <!-- NAME -->
        <label class=" block mb-4">
            <span class="text-gray-700">Nom</span>
            <input class="form-input mt-1 block w-full" required type="text" name="name"
                value="{{$data['product']->name}}">
        </label>
        @if ($errors->has('name'))
        <div class="text-red-500 text-xs italic my-4">
            {{ $errors->first('name')}}
        </div>
        @endif

        <!-- TYPE  -->
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
        @if ($errors->has('type_id'))
        <div class="text-red-500 text-xs italic my-4">
            {{ $errors->first('type_id')}}
        </div>
        @endif

        <!-- PERIOD  -->
        <div class="block mb-4">
            <label class="block">
                <span class="text-gray-700">Product Period :</span>
                <select class="form-select block w-full mt-1" name="period_id">
                    @foreach ($data['periods'] as $period)
                    <option {{$period->id === $data['product']->period_id ? 'selected' : ''}} value="{{$period->id}}">
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

        <!-- LABEL / VA ETRE GERER AVEC VUE -->
        <div class="block mb-4">
            <label class="block">
                <span class="text-gray-700">Product Label :</span>
                <select class="form-select block w-full mt-1" value="label_id">
                    @foreach ($data['labels'] as $label)
                    <option {{$label->name === $data['product']->getLabelName() ? 'selected' : ''}}
                        value="{{$label->id}}">
                        {{$label->name}}</option>
                    @endforeach
                </select>
            </label>
        </div>
        <button type="submit" class="bg-green-400 rounded py-2 px-4 text-white">Editer</button>
    </form>
    @if ($errors->any())
    <div class="text-red-500 text-xs italic mt-4">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>


@endsection