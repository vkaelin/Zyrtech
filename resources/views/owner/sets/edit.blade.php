@extends('layouts.owner.layout')

@section('content')

<h1 class="text-xl font-bold mb-6">Modifier le set  {{ $set->id }}</h1>

<edit-set
    :set="{{ $set->toJson() }}"
    :selected-products="{{ $set->products->toJson() }}"
    :chefs="{{ $chefs->toJson() }}"
    :products="{{ $products->toJson() }}"
>
</edit-set>

@endsection