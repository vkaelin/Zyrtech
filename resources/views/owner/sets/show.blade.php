@extends('layouts.owner.layout')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    <a class="text-green-500 hover:text-green-600" href="/dashboard/sets">Sets</a>
    <span class="text-green-500"> / </span>
    <span>Set {{ $set->id }}</span>
</h1>

<tabs>
    <tab name="Evaluations" :selected="true">
        <div class="mt-4 table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th
                            class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                            Evaluation
                        </th>
                        <th
                            class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                            Produit
                        </th>
                        <th
                            class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
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
                            <a class="hover:text-green-500" href="/products/{{ $rating->product->id }}">
                                {{ $rating->product->name }}
                            </a>
                        </td>
                        <td class="py-4 px-6 border-b border-gray-200">
                            {{ $rating->created_at->diffForHumans() }}
                        </td>
                    </tr>
                    @empty
                    <tr class="hover:bg-gray-300">
                        <td colspan="3" class="py-4 px-6">Aucune donnée n'est disponible.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $ratings->links('partials.pagination') }}
    </tab>
    <tab name="Moyennes">
        <div class="mt-4 table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th
                            class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                            Moyenne
                        </th>
                        <th
                            class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                            Produit
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($averages as $average)
                    <tr class="hover:bg-gray-300">
                        <td class="py-4 px-6 border-b border-gray-200">
                            {{ $average->average }} / 10
                        </td>
                        <td class="py-4 px-6 border-b border-gray-200">
                            <a class="hover:text-green-500" href="/products/{{ $average->product->id }}">
                                {{ $average->product->name }}
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr class="hover:bg-gray-300">
                        <td colspan="2" class="py-4 px-6">Aucune donnée n'est disponible.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </tab>
</tabs>

@endsection