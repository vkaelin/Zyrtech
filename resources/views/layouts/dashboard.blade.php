@include('layouts.header')

<div class="flex h-full w-full">

    {{-- Sidenav Desktop --}}
    <div class="hidden bg-gray-200 lg:block lg:w-64 lg:shrink-0 lg:py-4 lg:text-left">
        <div class="flex items-center justify-center mb-4">
            <h3 class="text-xl font-bold mr-2">Dashboard</h3>
            <p class="px-2 py-1 text-xs text-white bg-gray-800 rounded-full">{{ $user_fr }}</p>
        </div>
        <nav>
            <ul>
                @include("layouts.{$user}.side-links")
            </ul>
        </nav>
    </div>

    {{-- Main Content --}}
    <div class="w-full">
        {{-- Nav --}}
        <nav class="bg-blue-900 shadow py-6">
            {{-- Nav Desktop --}}
            <ul class="hidden lg:flex items-center px-4 text-white">
                @include("layouts.{$user}.main-links")
            </ul>

            {{-- Nav Mobile --}}
            <div class="block lg:hidden">
                <nav-mobile title="Dashboard" tag="Propriétaires">
                    @include("layouts.{$user}.side-links")
                    <hr class="w-full bg-blue-800" style="height: 1px;">
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