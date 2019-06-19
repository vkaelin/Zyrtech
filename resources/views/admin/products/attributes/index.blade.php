@extends('layouts.admin.layout')

@section('content')

<div class="flex flex-wrap items-center justify-between mb-6">
    <h1 class="text-3xl font-bold leading-normal">Vos Catégories</h1>
    <div class="flex flex-wrap">
        <a class="mt-1 sm:mt-0 mr-2 bg-green-500 rounded py-2 px-4 text-white leading-tight hover:bg-green-400"
            href="{{ url('/admin/products/attributes/types/create')}}">Créer un type</a>
        <a class="mt-1 sm:mt-0 mr-2 bg-green-500 rounded py-2 px-4 text-white leading-tight hover:bg-green-400"
            href="{{ url('/admin/products/attributes/periods/create')}}">Créer une période</a>
        <a class="mt-1 sm:mt-0 bg-green-500 rounded py-2 px-4 text-white leading-tight hover:bg-green-400"
            href="{{ url('/admin/products/attributes/labels/create')}}">Créer un label</a>
    </div>
</div>

<!-- TYPES -->
<div class="xl:flex inline-block ">
    <div class="mr-2 lg:mr-4 mb-6">
        <h2 class="text-xl font-bold mb-4">Les types</h2>
        <div class="table-container mx-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th
                            class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                            Nom
                        </th>
                        <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($types as $type)
                    <tr class="hover:bg-gray-300">
                        <td class="py-4 px-6 border-b border-gray-200">{{$type->name}}</td>
                        <td class="py-4 px-6 border-b border-gray-200">
                            <div class="flex">
                                <form method="GET" action="/admin/products/attributes/types/{{$type->id}}/edit"
                                    class="inline-block">
                                    @csrf
                                    <button class="inline-block font-bold btn-primary btn-sm">
                                        Modifier
                                    </button>
                                </form>
                                <form method="POST" action="/admin/products/attributes/types/{{$type->id}}"
                                    class="inline-block">
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
                        <td colspan="7" class="py-4 px-6">Vous n'avez pas de type.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- PERIODES -->
    <div class="mr-2 lg:mr-4 mb-6">
        <h2 class="text-xl font-bold mb-4">Les périodes</h2>
        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th
                            class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                            Nom
                        </th>
                        <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($periods as $period)
                    <tr class="hover:bg-gray-300">
                        <td class="py-4 px-6 border-b border-gray-200">{{$period->name}}</td>
                        <td class="py-4 px-6 border-b border-gray-200">
                            <div class="flex">
                                <form method="GET" action="/admin/products/attributes/periods/{{$period->id}}/edit"
                                    class="inline-block">
                                    @csrf
                                    <button class="inline-block font-bold btn-primary btn-sm">
                                        Modifier
                                    </button>
                                </form>
                                <form method="POST" action="/admin/products/attributes/periods/{{$period->id}}"
                                    class="inline-block">
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
                        <td colspan="7" class="py-4 px-6">Vous n'avez pas de période.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- TYPES -->
    <div class="mr-2 lg:mr-4 mb-6">
        <h2 class="text-xl font-bold mb-4">Les labels</h2>
        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th
                            class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                            Nom
                        </th>
                        <th class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($labels as $label)
                    <tr class="hover:bg-gray-300">
                        <td class="py-4 px-6 border-b border-gray-200">{{$label->name}}</td>
                        <td class="py-4 px-6 border-b border-gray-200">
                            <div class="flex">
                                <form method="GET" action="/admin/products/attributes/labels/{{$label->id}}/edit"
                                    class="inline-block">
                                    @csrf
                                    <button class="inline-block font-bold btn-primary btn-sm">
                                        Modifier
                                    </button>
                                </form>
                                <form method="POST" action="/admin/products/attributes/labels/{{$label->id}}"
                                    class="inline-block">
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
                        <td colspan="7" class="py-4 px-6">Vous n'avez pas de label.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>


@endsection