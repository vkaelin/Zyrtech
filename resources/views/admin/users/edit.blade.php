@extends('layouts.admin.layout')

@section('content')

<h1 class="text-3xl font-bold">
    <a class="text-green-500 hover:text-green-600" href="/admin/users">Utilisateurs</a>
    <span class="text-green-500"> / </span>
    <span>Modifier</span>
</h1>

<div class="mt-6 max-w-3xl bg-white rounded-lg shadow p-8">
    <form method="POST" action="/admin/users/{{ $user->id }}">
        @method('PATCH')

        @include('admin.users.form')
        <button class="mt-6 block ml-auto btn-primary">Modifier le Compte</button>
    </form>
</div>

@endsection