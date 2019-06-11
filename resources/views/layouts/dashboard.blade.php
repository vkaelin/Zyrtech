@include('layouts.header')

<div class="flex h-full w-full bg-gray-300">

    {{-- Sidenav Desktop --}}
    <div class="hidden bg-blue-900 text-gray-100 lg:flex lg:flex-col lg:justify-between lg:w-64 lg:shrink-0 lg:text-left">
        <div>
            <h2 class="bg-gray-900 p-4 mb-4">
                <a class="text-xl font-bold" href="/">Zyrtech SA</a>
            </h2>
            <div class="flex items-center px-4 mb-4">
                <h3 class="text-xl font-bold mr-2">Dashboard</h3>
                <p class="px-2 py-1 text-xs text-white bg-green-500 rounded-full">{{ $user_fr }}</p>
            </div>
            <nav>
                <ul>
                    @include("layouts.{$user}.side-links")
                </ul>
            </nav>
        </div>
        <div class="flex justify-center bg-gray-900 p-4">
            <a class="bg-green-500 w-full text-center py-2 rounded hover:bg-green-400" href="/">Retour au site</a>
        </div>
    </div>

    {{-- Main Content --}}
    <div class="w-full">
        {{-- Nav --}}
        <nav class="bg-gray-900 lg:bg-white shadow py-6">
            {{-- Nav Desktop --}}
            <ul class="hidden lg:flex justify-end items-center px-4 font-bold">
                @include("layouts.{$user}.main-links", ['color' => 'text-gray-900'])
            </ul>

            {{-- Nav Mobile --}}
            <div class="block lg:hidden">
                <nav-mobile title="Dashboard" tag="{{ $user_fr }}">
                    @include("layouts.{$user}.side-links")
                    <hr class="w-full bg-blue-900 my-4" style="height: 1px;">
                    @include("layouts.{$user}.main-links", ['color' => 'text-gray-400'])
                </nav-mobile>
            </div>
        </nav>

        {{-- Content --}}
        <div class="p-4">
            @yield('content')
        </div>
    </div>

</div>

@include('layouts.footer')