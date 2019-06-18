@extends('layouts.admin.layout')

@section('content')

<h1 class="text-3xl font-bold">
    <a class="text-green-500 hover:text-green-600" href="/admin/users">Utilisateurs</a>
    <span class="text-green-500"> / </span>
    <span>Modifier</span>
</h1>

<div class="mt-6 max-w-3xl bg-white rounded-lg shadow p-8">
    <form method="POST" action="/admin/users" class="flex flex-wrap -mx-2">
        @csrf

        <label class="mt-4 block w-1/2 px-2">
            <span class="text-gray-700">Prénom</span>
            <input class="form-input mt-1 block w-full border-gray-400" type="text" name="first_name">
        </label>

        <label class="mt-4 block w-1/2 px-2">
            <span class="text-gray-700">Nom</span>
            <input class="form-input mt-1 block w-full border-gray-400" type="text" name="last_name">
        </label>
        <label class="mt-4 block w-1/2 px-2">
            <span class="text-gray-700">Ville</span>
            <input class="form-input mt-1 block w-full border-gray-400" type="text" name="city">
        </label>

        <label class="mt-4 block w-1/2 px-2">
            <span class="text-gray-700">Pays</span>
            <input class="form-input mt-1 block w-full border-gray-400" type="text" name="country">
        </label>

        <label class="mt-4 block w-1/2 px-2">
            <span class="text-gray-700">Email</span>
            <input class="form-input mt-1 block w-full border-gray-400" type="email" name="email">
        </label>

        <label class="mt-4 block w-1/2 px-2">
            <span class="text-gray-700">Mot de passe</span>
            <input class="form-input mt-1 block w-full border-gray-400" type="password" name="password">
        </label>

        <div class="mt-4">
            <span class="text-gray-700">Role</span>
            <div class="mt-2">
                <div>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio text-green-600 border-gray-400" name="role" value="1">
                        <span class="ml-2">Propriétaire</span>
                    </label>
                </div>
                <div class="mt-2">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio text-green-600 border-gray-400" name="role" value="0">
                        <span class="ml-2">Admin</span>
                    </label>
                </div>
            </div>
        </div>

        <button class="mt-6 block ml-auto btn-primary">Créer le Compte</button>
    </form>
</div>

@endsection