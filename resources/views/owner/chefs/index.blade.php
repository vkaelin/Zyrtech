@extends('layouts.dashboard')

@section('content')

<div class="flex items-center mb-6">
    <h1 class="text-xl font-bold mr-4">Les comptes de vos chefs</h1>
    <a class="bg-green-400 rounded py-2 px-4 text-white" href="{{ url('/dashboard/chefs/create')}}">Ajouter un chef</a>
</div>



<div class="block w-full overflow-x-auto">
    <table class="w-full text-left shadow-md bg-white rounded-lg">
        <thead>
            <tr>
                <th class="py-4 px-6 bg-gray-100 font-bold uppercase text-sm text-gray-700 border-b border-gray-200">
                    Prénom
                </th>
                <th class="py-4 px-6 bg-gray-100 font-bold uppercase text-sm text-gray-700 border-b border-gray-200">
                    Nom
                </th>
                <th class="py-4 px-6 bg-gray-100 font-bold uppercase text-sm text-gray-700 border-b border-gray-200">
                    Code
                </th>
                <th class="py-4 px-6 bg-gray-100 font-bold uppercase text-sm text-gray-700 border-b border-gray-200">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse (auth()->user()->chefs as $chef)
            <tr class="hover:bg-gray-300">
                <td class="py-4 px-6 border-b border-gray-200">{{ $chef->first_name }}</td>
                <td class="py-4 px-6 border-b border-gray-200">{{ $chef->last_name }}</td>
                <td class="py-4 px-6 border-b border-gray-200">Aucun code.</td>
                <td class="py-4 px-6 border-b border-gray-200">
                    <a href="#" class="text-gray-300 font-bold py-1 px-3 mr-2 rounded text-xs bg-green-600 hover:bg-green-700">
                        Modifier
                    </a>
                    <a href="#" class="text-gray-300 font-bold py-1 px-3 rounded text-xs bg-red-600 hover:bg-red-700">
                        Supprimer
                    </a>
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

@endsection