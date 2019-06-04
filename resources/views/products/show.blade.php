@extends('layouts.app')

@section('content')

<h1>Product show page</h1>

<p>{{$product->name}}</p>
<p>{{$product->type->name}}</p>
<p>{{$product->period->name}}</p>



@endsection