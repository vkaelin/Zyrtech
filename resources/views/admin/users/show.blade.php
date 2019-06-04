@extends('layouts.app')

@section('content')

<h1>Informations du compte</h1>

<p>Prénom: {{ $user->first_name }}</p>
<p>Nom: {{ $user->last_name }}</p>
<p>Email: {{ $user->email }}</p>
<p>Role: {{ $user->role->name }}</p>

@endsection
