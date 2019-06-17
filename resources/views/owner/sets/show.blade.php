@extends('layouts.owner.layout')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    <a class="text-green-500 hover:text-green-600" href="/dashboard/sets">Sets</a>
    <span class="text-green-500"> / </span>
    <span>Set {{ $set->id }}</span>
</h1>

<div class="mt-4 table-container">
    <table class="table">
        <thead>
            <tr>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Evaluation
                </th>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Produit
                </th>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Date
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($ratings as $rating)
            <tr class="hover:bg-gray-300">
                <td class="py-4 px-6 border-b border-gray-200">
                    {{ $rating->value }} / 10
                </td>
                <td class="py-4 px-6 border-b border-gray-200">
                    <a class="hover:text-green-500 hover:font-semibold" href="/products/{{ $rating->product->id }}">
                        {{ $rating->product->name }}
                    </a>
                </td>
                <td class="py-4 px-6 border-b border-gray-200">
                    {{ $rating->created_at->diffForHumans() }}
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

{{ $ratings->links('partials.pagination') }}

@endsection