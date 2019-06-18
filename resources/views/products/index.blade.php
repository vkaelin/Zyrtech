@extends('layouts.app')

@section('content')

<div class="mx-auto container px-12 sm:px-4 md:px-24 pt-4">
    <div class="flex justify-center sm:justify-start items-baseline md:ml-4 lg:ml-0 mb-4 xl:mb-8 ">
        <svg class="h-6 md:h-8 w-auto" viewBox="0 0 61 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M39.5212 37.1558C34.9582 38.7948 29.9922 39.499 25.1369 38.9256C16.9751 37.9617 10.6048 33.1662 10.6048 33.1662C9.00618 32.9774 6.32768 39.2048 3.55738 38.8777C0.876483 38.5611 -0.152319 36.0197 0.0179809 34.5778C0.406681 31.2863 7.02468 29.4665 7.24078 27.6368C7.24078 27.6368 6.24858 25.382 6.69478 21.6033C7.88328 11.5398 16.8036 5.31347 26.2201 3.41072C33.0171 2.03552 46.6331 6.17427 51.5647 2.52192C53.5124 1.11853 54.5524 -0.271085 57.2329 0.0455152C60.8379 0.471165 60.9249 9.87868 60.6069 12.5735C59.3039 23.6016 52.77 32.4691 39.5212 37.1558ZM15.159 26.6561C22.5198 18.461 31.0193 15.5425 42.1558 17.745C43.0213 17.9178 43.8634 17.3517 44.0362 16.4849C44.2091 15.618 43.6442 14.7749 42.7786 14.6021C30.5792 12.1934 20.9434 15.4415 12.7836 24.5204C12.1926 25.1765 12.244 26.1909 12.899 26.7825C13.554 27.374 14.5669 27.3223 15.159 26.6561Z"
                fill="#48BB78" />
        </svg>
        <h1 class="ml-1 lg:ml-2 text-2xl md:text-3xl font-black uppercase text-gray-800">Nos Produits</h1>
    </div>

    <div class="flex flex-wrap sm:justify-center">
        @foreach ($products as $product)
        @include('partials.product-card', ['chef' => false])
        @endforeach
    </div>
    <div class="flex justify-center mt-4 mb-16">
        {{ $products->links('partials.pagination') }}
    </div>
</div>



@endsection