<a href="/products/{{$product->id}}"
    class="relative w-64 max-h-xs rounded overflow-hidden shadow-lg mr-4 mt-4 hover:shadow-xl border hover:border-green-300 cursor-pointer">
    @if ($chef)
    @if ($times = $set->productRatingsNumber($product))
    <span class="mr-1 mt-1 absolute right-0 top-0 px-2 py-1 bg-green-500 text-white text-xs rounded-full">Evalué {{ $times }} fois</span>
    @else
    <span class="mr-1 mt-1 absolute right-0 top-0 px-2 py-1 bg-red-500 text-white text-xs rounded-full">A évaluer</span>
    @endif
    @endif
    <div class="w-full h-32 bg-white">
        <img class="w-full h-32 {{$product->image_src === 'no-src' ? 'object-cover' : 'object-contain'}}"
            src="{{$product->getImage()}}" alt="{{$product->image_src}}">
    </div>
    <div class="px-6 pt-2">
        <span class="inline-block italic text-xs mb-1">
            {{$product->getTypeName()}} > {{$product->getPeriodName()}}
        </span>

        <div class="mb-1 flex justify-between">
            <span
                class="font-bold {{strlen($product->name) <= 9 ? 'text-xl' : 'text-base'}} {{strlen($product->name) > 12 ? 'text-sm' : ''}}">{{$product->name}}</span>
            <div>
                <product-star :stars="{{$product->getStarNote()}}" :readonly="true"></product-star>
                <span class="mt-1 block text-xs text-gray-500 text-right">{{$product->stars->count()}}
                    {{$product->stars->count() <= 1 ? 'vote' : 'votes'}}
                </span>
            </div>
        </div>
    </div>
    <div class="px-6 pt-2 pb-4">
        @forelse ($product->labels as $label)
        <span class="inline-block bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
            {{$label->name}}
        </span>
        @empty
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
            Aucun label
        </span>
        @endforelse
    </div>
</a>