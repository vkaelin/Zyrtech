@extends('layouts.admin.layout')

@section('content')

<div class="flex items-center">
    <h1 class="text-3xl font-bold">Produits</h1>
</div>

<products-table
    :headers="{{ json_encode(['Nom', 'Description', 'Image', 'Type', 'Période', 'Label', 'Vidéo', 'PDF', 'Actions']) }}"
    :all-products="{{ $products->toJson() }}" csrf="{{ csrf_token() }}">
</products-table>

@endsection