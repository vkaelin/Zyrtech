@extends('layouts.owner.layout')

@section('content')

<div class="flex items-center">
    <h1 class="text-3xl font-bold">Vos Chefs</h1>
</div>

<div class="mt-6 flex items-center justify-between">
    <div>
        <input class="form-input" type="text" placeholder="Recherche...">
    </div>
    <a class="bg-green-500 rounded py-2 px-4 text-white leading-tight hover:bg-green-400" href="{{ url('/dashboard/chefs/create')}}">Ajouter un chef</a>
</div>


<div class="mt-4 table-container">
    <table class="table">
        <thead>
            <tr>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Type
                </th>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Chef de cuisine
                </th>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($chefs as $chef)
            <tr>
                <td class="py-4 px-6 border-b border-gray-200">
                    @if ($chef->group)
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
                <td class="py-4 px-6 border-b border-gray-200">{{ $chef->full_name }}</td>
                <td class="py-4 px-6 border-b border-gray-200">
                    <div class="flex">
                        <a href="#"
                            class="text-white font-bold py-1 px-3 mr-2 rounded text-xs bg-green-600 hover:bg-green-700">
                            Modifier
                        </a>
                        <a href="#" class="text-white font-bold py-1 px-3 rounded text-xs bg-red-600 hover:bg-red-700">
                            Supprimer
                        </a>
                    </div>
                </td>
            </tr>
            @empty
            <tr class="hover:bg-gray-300">
                <td>Vous n'avez pas de chefs.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{ $chefs->links('partials.pagination') }}

@endsection