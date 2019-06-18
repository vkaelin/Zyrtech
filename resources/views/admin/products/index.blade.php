@extends('layouts.admin.layout')

@section('content')

<div class="flex items-center justify-between mb-6">
    <h1 class="text-3xl font-bold leading-normal">Vos Produits</h1>
    <a class="bg-green-500 rounded py-2 px-4 text-white leading-tight hover:bg-green-400"
        href="{{ url('/admin/products/create')}}">Créer un produit</a>
</div>

<div class="mt-4 table-container">
    <table class="table">
        <thead>
            <tr>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Nom
                </th>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Description
                </th>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Image
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
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    Vidéo
                </th>
                <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                    PDF
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
                <td class="py-4 px-6 border-b border-gray-200">{{ str_limit($product->description,20)}}</td>
                <td class="py-4 px-6 border-b border-gray-200">
                    <a href="{{Storage::url($product->image_src)}}" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-6 h-auto inline">
                            <path
                                d="M0 6c0-1.1.9-2 2-2h3l2-2h6l2 2h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6zm10 10a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0-2a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg>
                    </a>
                </td>
                <td class="py-4 px-6 border-b border-gray-200">{{ $product->getTypeName() }}</td>
                <td class="py-4 px-6 border-b border-gray-200">{{ $product->getPeriodName() }}</td>
                <td class="py-4 px-6 border-b border-gray-200">
                    @foreach ($product->labels as $label)
                    {{$label->name}},
                    @endforeach
                </td>
                <td class="py-4 px-6 border-b border-gray-200">
                    vids
                </td>
                <td class="py-4 px-6 border-b border-gray-200">
                    pdf
                </td>
                <td class="py-4 px-6 border-b border-gray-200">
                    <div class="flex">
                        <form method="GET" action="/admin/products/{{$product->id}}/edit" class="inline-block">
                            @csrf
                            <button class="inline-block font-bold btn-primary btn-sm">
                                Modifier
                            </button>
                        </form>
                        <form method="POST" action="/admin/products/{{$product->id}}" class="inline-block">
                            @method('DELETE')
                            @csrf
                            <button class="ml-3 font-bold btn-danger btn-sm">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr class="hover:bg-gray-300">
                <td colspan="7" class="py-4 px-6">Vous n'avez pas de produits.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{ $products->links('partials.pagination') }}

@endsection