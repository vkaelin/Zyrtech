@extends('layouts.owner.layout')

@section('content')

<h1 class="text-3xl font-bold">
    <a class="text-green-500 hover:text-green-600" href="/dashboard/sets">Sets</a>
    <span class="text-green-500"> / </span>
    <span>Modifier Set {{ $set->id }}</span>
</h1>

<edit-set :set="{{ $set->toJson() }}" :selected-products="{{ $set->products->toJson() }}"
    :chefs="{{ $chefs->toJson() }}" :products="{{ $products->toJson() }}">
</edit-set>

@endsection