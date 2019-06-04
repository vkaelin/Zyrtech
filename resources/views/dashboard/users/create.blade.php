@extends('layouts.app')

@section('content')

<h1>Créer un compte</h1>

<form method="POST" action="/dashboard/users">
    @csrf
    <label for="firstName">Prénom</label>
    <input type="text" name="firstName">

    <button class="bg-green-400 rounded py-2 px-4 text-white">Créer</button>
</form>

@endsection
