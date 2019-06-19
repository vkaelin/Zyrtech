@extends('layouts.admin.layout')

@section('content')
<h1 class="text-3xl font-bold">
    <a class="text-green-500 hover:text-green-600" href="/admin/products">Produits</a>
    <span class="text-green-500"> / </span>
    <span class="text-gray-900">Modifier</span>
</h1>

<div class="mt-6 max-w-lg xl:max-w-5xl bg-white rounded-lg shadow p-8">
    <form method="POST" action="/admin/products/{{$product->id}}/edit" enctype="multipart/form-data">
        @method("PATCH")
        @csrf

        <div class="block xl:flex xl:justify-between">
            <div class="w-full xl:w-1/2 mr-6">
                <!-- NAME -->
                <label class="block max-w-full mb-4">
                    <span class="text-gray-700">Nom</span>
                    <input class="form-input mt-1 block w-full" required type="text" name="name"
                        value="{{$product->name}}">
                </label>
                @if ($errors->has('name'))
                <div class="text-red-500 text-xs italic my-4">
                    {{ $errors->first('name')}}
                </div>
                @endif

                <!-- DESCRIPTION -->
                <label class="block max-w-full mb-4">
                    <span class="text-gray-700">Description</span>
                    <textarea class="form-input mt-1 block w-full resize-none h-56" required cols="30" rows="10"
                        name="description">{{$product->description}}</textarea>
                </label>
                @if ($errors->has('description'))
                <div class="text-red-500 text-xs italic my-4">
                    {{ $errors->first('description')}}
                </div>
                @endif
            </div>

            <div class="w-full xl:w-1/2">
                <!-- TYPE  -->
                <div class="block max-w-full mb-4">
                    <span class="text-gray-700 block mb-2">Type :</span>
                    @foreach ($types as $type)
                    <div>
                        <div class="mb-1">
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="type_id" value="{{$type->id}}"
                                    {{$type->id === $product->type_id ? 'checked' : ''}}>
                                <span class="ml-2 text-gray-700">{{$type->name}}</span>
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
                <div class="block max-w-full mb-4">
                    <label class="block">
                        <span class="text-gray-700">Période :</span>
                        <select class="form-select block w-full mt-1" name="period_id">
                            @foreach ($periods as $period)
                            <option {{$period->id === $product->period_id ? 'selected' : ''}} value="{{$period->id}}">
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


                <!-- LABEL -->
                <div class="block max-w-full mb-4">
                    <label class="block">
                        <span class="text-gray-700">Labels</span>
                        <select class="form-multiselect block w-full mt-1 h-16" multiple name="multiLabels[]"
                            id="multiLabels">
                            @foreach ($labels as $label)
                            <option value="{{$label->id}}" {{$product->labels->contains($label) ? 'selected' : ''}}>
                                {{$label->name}}
                            </option>
                            @endforeach
                        </select>
                    </label>
                </div>

                <!-- Youtube -->
                <label class="block max-w-full mb-4">
                    <span class="text-gray-700">Lien Youtube</span>
                    <input class="form-input mt-1 block w-full" type="text" name="video_link"
                        value="{{$product->video_link}}" placeholder="Tapez le lien complet ici...">
                </label>
                @if ($errors->has('video_link'))
                <div class="text-red-500 text-xs italic my-4">
                    {{ $errors->first('video_link')}}
                </div>
                @endif

                <!-- IMAGE -->
                <label class="block max-w-full pb-6">
                    <span class="text-gray-700">Image</span>
                    <input type="file" class="form-input mt-1 block w-full text-gray-700" type="text" name="image_src">
                </label>
                @if ($errors->has('image_src'))
                <div class="text-red-500 text-xs italic my-4">
                    {{ $errors->first('image_src')}}
                </div>
                @endif

            </div>
        </div>
        <button type="submit" class="block ml-auto btn-primary">Editer</button>
    </form>
</div>


@endsection