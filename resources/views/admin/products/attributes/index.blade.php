@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold">Attributes page</h1>

<!-- TYPES -->
<div class="block my-4">
    <h2 class="text-lg font-bold">Types :</h2>
    <ul>
        @foreach ($data['types'] as $type)
        <p class="mb-2 mt-4">{{$type->name}}</p>
        <a class="mt-4 text-white font-bold py-1 px-3 mr-2 rounded text-xs bg-green-600 hover:bg-green-700"
            href="/admin/products/attributes/types/{{$type->id}}/edit">Editer</a>
        <form method="POST" action="/admin/products/attributes/types/{{$type->id}}">
            @method('DELETE')
            @csrf
            <button type="submit"
                class="mt-3 text-white font-bold py-1 px-3 mr-2 rounded text-xs bg-red-600 hover:bg-red-700">Supprimer</button>
        </form>
        @endforeach
    </ul>
</div>
<!-- PERIODES -->
<div class="block my-4">
    <h2 class="text-lg">Périodes :</h2>
    <ul>
        @foreach ($data['periods'] as $period)
        <p class="mb-2 mt-4">{{$period->name}}</p>
        <a class="mt-4 text-white font-bold py-1 px-3 mr-2 rounded text-xs bg-green-600 hover:bg-green-700"
            href="/admin/products/attributes/periods/{{$period->id}}/edit">Editer</a>
        <form method="POST" action="/admin/products/attributes/periods/{{$period->id}}">
            @method('DELETE')
            @csrf
            <button type="submit"
                class="mt-3 text-white font-bold py-1 px-3 mr-2 rounded text-xs bg-red-600 hover:bg-red-700">Supprimer</button>
        </form>
        @endforeach
    </ul>
</div>
<!-- LABELS -->
<div class="block my-4">
    <h2 class="text-lg">Labels :</h2>
    <ul>
        @foreach ($data['labels'] as $label)
        <p class="mb-2 mt-4">{{$label->name}}</p>
        <a class="mt-4 text-white font-bold py-1 px-3 mr-2 rounded text-xs bg-green-600 hover:bg-green-700"
            href="/admin/products/attributes/labels/{{$label->id}}/edit">Editer</a>
        <form method="POST" action="/admin/products/attributes/labels/{{$label->id}}">
            @method('DELETE')
            @csrf
            <button type="submit"
                class="mt-3 text-white font-bold py-1 px-3 mr-2 rounded text-xs bg-red-600 hover:bg-red-700">Supprimer</button>
        </form>
        @endforeach
    </ul>
</div>

@endsection