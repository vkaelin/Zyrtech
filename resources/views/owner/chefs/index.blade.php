@extends('layouts.owner.layout')

@section('content')

<div class="flex items-center">
    <h1 class="text-3xl font-bold">Vos Chefs</h1>
</div>

<chefs-table
    :headers="{{ json_encode(['Type', 'Chef de cuisine', 'Actions']) }}"
    :all-chefs="{{ $chefs->toJson() }}"
>
</chefs-table>

@endsection