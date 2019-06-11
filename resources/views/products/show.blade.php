@extends('layouts.app')

@section('content')

<h1>Product show page</h1>

<p>{{$product->name}}</p>
<p>{{$product->getTypeName()}}</p>
<p>{{$product->getPeriodName()}}</p>
@foreach ($product->labels as $label)
<p>{{$label->name}}</p>
@endforeach
<p>{{$product->getStarAverage()}}</p>

<product-star :product="{{$product}}" :stars="{{$product->getStarAverage()}}" :readonly="false">
</product-star>

@endsection