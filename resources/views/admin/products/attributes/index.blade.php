@extends('layouts.admin')

@section('content')

<div class="flex items-center mb-6">
    <h1 class="text-xl font-bold mr-4">Les attributs</h1>
    <a class="bg-green-400 rounded py-2 px-4 mr-2 text-white"
        href="{{ url('/admin/products/attributes/types/create')}}">Ajouter un type</a>
    <a class="bg-green-400 rounded py-2 px-4 mr-2 text-white"
        href="{{ url('/admin/products/attributes/periods/create')}}">Ajouter une période</a>
    <a class="bg-green-400 rounded py-2 px-4 text-white"
        href="{{ url('/admin/products/attributes/labels/create')}}">Ajouter un label</a>
</div>

<!-- TYPES -->

<div class="flex">

    <div class="block w-1/3 overflow-x-auto mr-4">
        <h2 class="text-xl font-bold mb-4">Les types</h2>
        <table class="w-full text-left shadow-md bg-white rounded-lg">
            <thead>
                <tr>
                    <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                        Nom
                    </th>
                    <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data['types'] as $type)
                <tr class="hover:bg-gray-300">
                    <td class="py-4 px-6 border-b border-gray-200">{{$type->name}}</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <form method="GET" action="/admin/products/attributes/types/{{$type->id}}/edit"
                            class="inline-block">
                            @csrf
                            <button
                                class="inline-block text-white font-bold py-2 px-3 mr-2 rounded text-xs bg-green-600 hover:bg-green-700">
                                Modifier
                            </button>
                        </form>
                        <form method="POST" action="/admin/products/attributes/types/{{$type->id}}"
                            class="inline-block">
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
                    <td>Vous n'avez pas de type.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- PERIODES -->
    <div class="block w-1/3 overflow-x-auto mr-4">
        <h2 class="text-xl font-bold mb-4">Les périodes</h2>
        <table class="w-full text-left shadow-md bg-white rounded-lg">
            <thead>
                <tr>
                    <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                        Nom
                    </th>
                    <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data['periods'] as $period)
                <tr class="hover:bg-gray-300">
                    <td class="py-4 px-6 border-b border-gray-200">{{$period->name}}</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <form method="GET" action="/admin/products/attributes/periods/{{$period->id}}/edit"
                            class="inline-block">
                            @csrf
                            <button
                                class="inline-block text-white font-bold py-2 px-3 mr-2 rounded text-xs bg-green-600 hover:bg-green-700">
                                Modifier
                            </button>
                        </form>
                        <form method="POST" action="/admin/products/attributes/periods/{{$period->id}}"
                            class="inline-block">
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
                    <td>Vous n'avez pas de période.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- TYPES -->
    <div class="block w-1/3 overflow-x-auto">
        <h2 class="text-xl font-bold mb-4">Les labels</h2>
        <table class="w-full text-left shadow-md bg-white rounded-lg">
            <thead>
                <tr>
                    <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                        Nom
                    </th>
                    <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data['labels'] as $label)
                <tr class="hover:bg-gray-300">
                    <td class="py-4 px-6 border-b border-gray-200">{{$label->name}}</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <form method="GET" action="/admin/products/attributes/labels/{{$label->id}}/edit"
                            class="inline-block">
                            @csrf
                            <button
                                class="inline-block text-white font-bold py-2 px-3 mr-2 rounded text-xs bg-green-600 hover:bg-green-700">
                                Modifier
                            </button>
                        </form>
                        <form method="POST" action="/admin/products/attributes/labels/{{$label->id}}"
                            class="inline-block">
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
                    <td>Vous n'avez pas de label.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>


@endsection