@extends('layouts.app')

@section('content')

<h1>Product show page</h1>

<p>{{$product->name}}</p>
<p>{{$product->getTypeName()}}</p>
<p>{{$product->getPeriodName()}}</p>
<p>{{$product->getLabelName()}}</p>

@endsection