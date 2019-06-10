@extends('layouts.dashboard')

@section('content')

<div class="flex items-center mb-6">
    <h1 class="text-xl font-bold mr-4">Vos sets</h1>
    <a class="bg-green-400 rounded py-2 px-4 text-white" href="{{ url('/dashboard/sets/create')}}">Créer un set</a>
</div>


<div class="block w-full overflow-x-auto">
    <table class="w-full text-left shadow-md bg-white rounded-lg overflow-hidden">
        <thead>
            <tr>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Type
                </th>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Chef / Groupe
                </th>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Produits
                </th>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Code
                </th>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse (auth()->user()->sets as $set)
            <tr class="hover:bg-gray-300">
                <td class="py-4 px-6 border-b border-gray-200">
                    @if ($set->chef->group)
                    <svg class="fill-current w-4" viewBox="0 0 20 20">
                        <path
                            d="M7 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0 1c2.15 0 4.2.4 6.1 1.09L12 16h-1.25L10 20H4l-.75-4H2L.9 10.09A17.93 17.93 0 0 1 7 9zm8.31.17c1.32.18 2.59.48 3.8.92L18 16h-1.25L16 20h-3.96l.37-2h1.25l1.65-8.83zM13 0a4 4 0 1 1-1.33 7.76 5.96 5.96 0 0 0 0-7.52C12.1.1 12.53 0 13 0z" />
                    </svg>
                    @else
                    <svg class="fill-current w-4" viewBox="0 0 20 20">
                        <path
                            d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z" />
                    </svg>
                    @endif
                </td>
                <td class="py-4 px-6 border-b border-gray-200">
                    {{ $set->chef->full_name }}
                </td>
                <td class="py-4 px-6 border-b border-gray-200">
                    @foreach ($set->products as $product)
                    {{ $product->name }},
                    @endforeach
                </td>
                <td class="py-4 px-6 border-b border-gray-200">
                    {{ $set->code }}
                </td>
                <td class="py-4 px-6 border-b border-gray-200">
                    <div class="flex">
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
                    </div>
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