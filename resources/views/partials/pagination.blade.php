@if ($paginator->hasPages())
<div class="mt-8 flex flex-wrap items-center">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    <span
        class="rounded bg-white border border-gray-400 px-3 py-2 text-gray-600 cursor-default select-none">Précédent</span>
    @else
    <a class="rounded bg-white border border-gray-400 px-3 py-2 text-gray-900 hover:bg-gray-400"
        href="{{ $paginator->previousPageUrl() }}" rel="prev">
        Précédent
    </a>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <span class="ml-2 rounded bg-white border border-gray-400 px-3 py-2 cursor-not-allowed">
            {{ $element }}
        </span>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
            <span class="ml-2 rounded bg-white border border-gray-400 px-3 py-2 bg-gray-400 select-none">{{ $page }}</span>
            @else
            <a class="ml-2 hidden md:block rounded bg-white border border-gray-400 px-3 py-2 hover:bg-gray-400 text-gray-900"
                href="{{ $url }}">
                {{ $page }}
            </a>
            @endif
        @endforeach
        @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <a class="ml-2 rounded bg-white border border-gray-400 px-3 py-2 hover:bg-gray-400 text-gray-900"
        href="{{ $paginator->nextPageUrl() }}" rel="next">Suivant</a>
    @else
    <span
        class="ml-2 rounded bg-white border border-gray-400 px-3 py-2 text-gray-600 cursor-default select-none">Suivant</span>
    @endif
</div>
@endif