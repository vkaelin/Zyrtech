@extends('layouts.dashboard')

@section('content')

<div class="flex items-center mb-6">
    <h1 class="text-xl font-bold mr-4">Vos sets</h1>
    <a class="bg-green-400 rounded py-2 px-4 text-white" href="{{ url('/dashboard/sets/create')}}">Créer un set</a>
</div>


<div class="block w-full overflow-x-auto">
    <table class="w-full text-left shadow-md bg-white rounded-lg">
        <thead>
            <tr>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Id
                </th>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Chefs
                </th>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Produits
                </th>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse (auth()->user()->sets as $set)
            <tr class="hover:bg-gray-300">
                <td class="py-4 px-6 border-b border-gray-200">{{ $set->id }}</td>
                <td class="py-4 px-6 border-b border-gray-200">
                    @foreach ($set->chefs as $chef)
                    {{ $chef->first_name }} {{ $chef->last_name }},
                    @endforeach
                </td>
                <td class="py-4 px-6 border-b border-gray-200">
                    @foreach ($set->products as $product)
                    {{ $product->name }},
                    @endforeach
                </td>
                <td class="py-4 px-6 border-b border-gray-200">
                    <a href="{{ $set->path() . '/edit' }}"
                        class="inline-block text-white font-bold py-2 px-3 mr-2 rounded text-xs bg-green-600 hover:bg-green-700">
                        Modifier
                    </a>
                    <form class="inline-block" method="POST" action="{{ $set->path() }}">
                        @csrf
                        @method('DELETE')

                        <button class="text-white font-bold py-2 px-3 rounded text-xs bg-red-600 hover:bg-red-700"
                            type="submit">
                            Supprimer
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr class="hover:bg-gray-300">
                <td>Vous n'avez pas créé sets.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection