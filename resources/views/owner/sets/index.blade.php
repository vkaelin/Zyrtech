@extends('layouts.owner.layout')

@section('content')

<div class="flex items-center justify-between mb-6">
    <h1 class="text-3xl font-bold leading-normal">Vos Sets</h1>
    <a class="bg-green-500 rounded py-2 px-4 text-white leading-tight hover:bg-green-400"
        href="/dashboard/sets/create">Créer un set</a>
</div>

<div class="mt-4 table-container">
    <table class="table">
        <thead>
            <tr>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Détails
                </th>
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
                    Evaluations
                </th>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Code
                </th>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Activation
                </th>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($sets as $set)
            <tr class="hover:bg-gray-300">
                <td class="border-b border-gray-200">
                    <a class="block py-4 px-6" href="/dashboard/sets/{{ $set->id }}">
                        <svg class="icon w-6" viewBox="0 0 20 20">
                            <path
                                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                        </svg>
                    </a>
                </td>
                <td class="py-4 px-6 border-b border-gray-200">
                    @if ($set->chef->group)
                    <svg class="icon icon-md" viewBox="0 0 20 20">
                        <path
                            d="M7 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0 1c2.15 0 4.2.4 6.1 1.09L12 16h-1.25L10 20H4l-.75-4H2L.9 10.09A17.93 17.93 0 0 1 7 9zm8.31.17c1.32.18 2.59.48 3.8.92L18 16h-1.25L16 20h-3.96l.37-2h1.25l1.65-8.83zM13 0a4 4 0 1 1-1.33 7.76 5.96 5.96 0 0 0 0-7.52C12.1.1 12.53 0 13 0z" />
                    </svg>
                    @else
                    <svg class="icon icon-md" viewBox="0 0 20 20">
                        <path
                            d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z" />
                    </svg>
                    @endif
                </td>
                <td class="py-4 px-6 border-b border-gray-200">
                    {{ $set->chef->full_name }}
                </td>
                <td class="py-4 px-6 border-b border-gray-200">
                    {{ $set->products->count() }}
                </td>
                <td class="py-4 px-6 border-b border-gray-200">
                    {{ $set->productsRated()->count() }}
                </td>
                <td class="py-4 px-6 border-b border-gray-200">
                    {{ $set->code }}
                </td>
                <td class="py-4 px-6 border-b border-gray-200">
                    <div class="flex items-center">
                        <form method="POST" action="/dashboard/sets/{{ $set->id }}">
                            @csrf
                            @method('PATCH')
                            <input class="form-checkbox w-6 h-6 text-gray-900" name="active" type="checkbox"
                                onChange="this.form.submit()" {{ $set->active ? 'checked' : ''  }}>
                        </form>
                    </div>
                </td>
                <td class="py-4 px-6 border-b border-gray-200">
                    <div class="flex">
                        <a href="{{ $set->path() . '/edit' }}" class="inline-block font-bold btn-primary btn-sm">
                            Modifier
                        </a>
                        <form class="inline-block" method="POST" action="{{ $set->path() }}">
                            @csrf
                            @method('DELETE')

                            <button class="ml-3 font-bold btn-danger btn-sm" type="submit">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr class="hover:bg-gray-300">
                <td colspan="7" class="py-4 px-6">Vous n'avez pas créé de sets.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{ $sets->links('partials.pagination') }}

@endsection