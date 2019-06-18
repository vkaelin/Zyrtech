@extends('layouts.admin.layout')

@section('content')

<div class="flex items-center">
    <h1 class="text-3xl font-bold">Utilisateurs</h1>
</div>

<users-table :headers="{{ json_encode(['Nom', 'Role', 'Actions']) }}" :all-users="{{ $users->toJson() }}"
    csrf="{{ csrf_token() }}">
</users-table>

@endsection