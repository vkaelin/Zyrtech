@include('layouts.header')

<div class="flex h-full min-h-screen w-full bg-gray-200">

    {{-- Sidenav Desktop --}}
    <div class="hidden bg-gray-800 text-gray-100 lg:flex lg:flex-col lg:justify-between lg:w-80 lg:shrink-0 lg:text-left">
        <div>
            <h2 class="bg-gray-900 py-6 mb-4 text-center">
                <a class="text-xl font-bold" href="/">Zyrtech SA</a>
            </h2>
            <div class="flex items-center px-4">
                <h3 class="text-xl font-bold mr-2">Dashboard</h3>
                <p class="px-2 py-1 text-xs text-white bg-green-500 rounded-full">{{ $user_fr }}</p>
            </div>
            <nav class="mt-6">
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
        <nav class="bg-gray-900 lg:bg-white py-4">
            {{-- Nav Desktop --}}
            <ul class="hidden lg:flex flex-row-reverse justify-start items-center px-4 font-semibold">
                @include("layouts.{$user}.main-links")
            </ul>

            {{-- Nav Mobile --}}
            <div class="block lg:hidden">
                <nav-mobile title="Dashboard" tag="{{ $user_fr }}">
                    @include("layouts.{$user}.side-links")
                    <hr class="w-full bg-gray-800 my-4" style="height: 1px;">
                    @include("layouts.{$user}.main-links")
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