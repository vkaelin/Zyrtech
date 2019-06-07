@extends('layouts.admin')

@section('content')

<div class="flex items-center mb-6">
    <h1 class="text-xl font-bold mr-4">Les produits</h1>
    <a class="bg-green-400 rounded py-2 px-4 text-white" href="{{ url('/admin/products/create')}}">Ajouter un
        produit</a>
</div>

<div class="block w-full overflow-x-auto">
    <table class="w-full text-left shadow-md bg-white rounded-lg">
        <thead>
            <tr>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Nom
                </th>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Description
                </th>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Type
                </th>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Période
                </th>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Label
                </th>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
            <tr class="hover:bg-gray-300">
                <td class="py-4 px-6 border-b border-gray-200">{{ $product->name}}</td>
                <td class="py-4 px-6 border-b border-gray-200">Lorem ipsum ....</td>
                <td class="py-4 px-6 border-b border-gray-200">{{ $product->getTypeName() }}</td>
                <td class="py-4 px-6 border-b border-gray-200">{{ $product->getPeriodName() }}</td>
                <td class="py-4 px-6 border-b border-gray-200">
                    @foreach ($product->labels as $label)
                    {{$label->name}},
                    @endforeach
                </td>
                <td class="py-4 px-6 border-b border-gray-200">
                    <form method="GET" action="/admin/products/{{$product->id}}/edit" class="inline-block">
                        @csrf
                        <button
                            class="inline-block text-white font-bold py-2 px-3 mr-2 rounded text-xs bg-green-600 hover:bg-green-700">
                            Modifier
                        </button>
                    </form>
                    <form method="POST" action="/admin/products/{{$product->id}}" class="inline-block">
                        @method('DELETE')
                        @csrf
                        <button
                            class="inline-block text-white font-bold py-2 px-3 mr-2 rounded text-xs bg-red-600 hover:bg-red-700">
                            Supprimer
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr class="hover:bg-gray-300">
                <td>Vous n'avez pas de produits.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection