@extends('layouts.dashboard')

@section('content')

<div class="flex items-center mb-6">
    <h1 class="text-xl font-bold">Les comptes de vos chefs</h1>
    <a class="bg-green-400 rounded py-2 px-4 text-white" href="{{ url('/dashboard/chefs/create')}}">Ajouter un chef</a>
</div>

@forelse (auth()->user()->chefs as $chef)
    <p>Prénom: {{ $chef->first_name }}</p>
    <p class="mb-4">Nom: {{ $chef->last_name }}</p>
@empty
     <p>Vous n'avez pas de chefs.</p>
@endforelse

@endsection