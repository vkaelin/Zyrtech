@include('layouts.header')

<div class="flex h-full min-h-screen w-full bg-gray-200">

    {{-- Sidenav Desktop --}}
    <div
        class="hidden bg-gray-800 text-gray-100 lg:flex lg:flex-col lg:justify-between lg:w-64 lg:flex-shrink-0 lg:text-left">
        <div>
            <div class="bg-gray-900 py-4 text-center">
                <h2 class="py-2">
                    <a class="text-2xl font-bold" href="/">Zyrtech SA</a>
                </h2>
            </div>
            <div class="mt-4 flex items-center px-4">
                <h3 class="text-xl font-bold mr-2">Dashboard</h3>
                <p class="px-2 py-1 text-xs text-white bg-green-500 rounded-full">{{ $user_fr }}</p>
            </div>
            <nav class="mt-6 leading-normal">
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
                <dropdown align="right" width="auto" class="pl-4">
                    <template v-slot:trigger>
                        <button
                            class="flex items-center py-2 text-gray-400 font-semibold text-gray-900 gem focus:outline-none">
                            <svg class="w-6 mr-2 fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM7 6v2a3 3 0 1 0 6 0V6a3 3 0 1 0-6 0zm-3.65 8.44a8 8 0 0 0 13.3 0 15.94 15.94 0 0 0-13.3 0z" />
                            </svg>
                            {{ Auth::user()->full_name }}
                        </button>
                    </template>

                    <template v-slot:default>
                        <a href="{{ route('logout') }}"
                            class="block px-4 py-2 text-gray-400 lg:text-gray-900 lg:hover:text-gray-800"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Déconnexion') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </template>
                </dropdown>
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
        <div class="p-4 md:px-12 md:py-8">
            @yield('content')
        </div>
    </div>

</div>

@include('layouts.footer')