@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="md:w-1/2 md:mx-auto">
            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">
                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                    Zyrtech SA
                </div>
                <div class="w-full p-6">
                    <p class="text-gray-700 mb-8">
                        Bienvenue!
                    </p>
                    <a class="bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-400" href="/products">Nos produits</a>
                </div>
            </div>
        </div>
    </div>
@endsection
