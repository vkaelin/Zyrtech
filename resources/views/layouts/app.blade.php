@include('layouts.header')

<nav class="bg-white mb-8 py-3">
    <div class="mx-auto px-6 md:px-8">
        <div class="flex items-center justify-center">
            <div class="">
                {{-- <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-800 mr-4">
                {{ config('app.name', 'Zyrtech') }}
                </a> --}}
                <a class="inline-block text-2xl font-bold" href="/">
                    <svg class=" h-10 w-auto mx-auto" viewBox="0 0 137 68" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M81.883 37.1558C77.32 38.7948 72.354 39.499 67.4987 38.9256C59.3369 37.9617 52.9666 33.1662 52.9666 33.1662C51.368 32.9774 48.6895 39.2048 45.9192 38.8777C43.2383 38.5611 42.2095 36.0197 42.3798 34.5778C42.7685 31.2863 49.3865 29.4665 49.6026 27.6368C49.6026 27.6368 48.6104 25.382 49.0566 21.6033C50.2451 11.5398 59.1654 5.31347 68.5819 3.41072C75.3789 2.03552 88.9949 6.17427 93.9265 2.52192C95.8742 1.11853 96.9142 -0.271085 99.5947 0.0455152C103.2 0.471165 103.287 9.87868 102.969 12.5735C101.666 23.6016 95.1318 32.4691 81.883 37.1558ZM57.5208 26.6561C64.8816 18.461 73.3811 15.5425 84.5176 17.745C85.3831 17.9178 86.2252 17.3517 86.398 16.4849C86.5709 15.618 86.006 14.7749 85.1404 14.6021C72.941 12.1934 63.3052 15.4415 55.1454 24.5204C54.5544 25.1765 54.6058 26.1909 55.2608 26.7825C55.9158 27.374 56.9287 27.3223 57.5208 26.6561Z"
                            fill="#48BB78" />
                        <path
                            d="M20.0215 66.8566H0V62.5675L11.1269 46.7648H0.26367V41.1574H19.7402V45.4289L8.61328 61.2492H20.0215V66.8566ZM29.2886 50.6847L33.7183 41.1574H41.2418L32.7867 56.8195V66.8566H25.7906V57.0304L17.3355 41.1574H24.8941L29.2886 50.6847ZM47.3625 57.505V66.8566H40.4191V41.1574H48.839C55.8234 41.1574 59.3156 43.6886 59.3156 48.7511C59.3156 51.7277 57.8625 54.0304 54.9562 55.6593L62.4445 66.8566H54.5695L49.1203 57.505H47.3625ZM47.3625 52.2843H48.6632C51.089 52.2843 52.3019 51.2121 52.3019 49.0675C52.3019 47.298 51.1125 46.4132 48.7336 46.4132H47.3625V52.2843ZM72.5203 66.8566H65.5769V46.8351H59.3015V41.1574H78.7781V46.8351H72.5203V66.8566ZM94.1097 66.8566H78.8519V41.1574H94.1097V46.7296H85.7953V50.7726H93.4945V56.3449H85.7953V61.1964H94.1097V66.8566ZM106.453 46.4836C104.801 46.4836 103.512 47.1632 102.586 48.5226C101.66 49.8703 101.198 51.7336 101.198 54.1125C101.198 59.0578 103.078 61.5304 106.84 61.5304C107.977 61.5304 109.078 61.3722 110.145 61.0558C111.211 60.7394 112.283 60.3586 113.362 59.9132V65.7843C111.217 66.7336 108.791 67.2082 106.084 67.2082C102.205 67.2082 99.2287 66.0832 97.1543 63.8332C95.0918 61.5832 94.0605 58.3312 94.0605 54.0773C94.0605 51.4171 94.5586 49.0793 95.5547 47.0636C96.5625 45.048 98.0039 43.5011 99.8787 42.423C101.766 41.3332 103.981 40.7882 106.524 40.7882C109.301 40.7882 111.955 41.3918 114.487 42.5988L112.36 48.0656C111.41 47.6203 110.461 47.2453 109.512 46.9406C108.563 46.6359 107.543 46.4836 106.453 46.4836ZM136.814 66.8566H129.836V56.38H121.767V66.8566H114.789V41.1574H121.767V50.6847H129.836V41.1574H136.814V66.8566Z"
                            fill="#2D3748" />
                    </svg>

                </a>

            </div>
            <div class="flex flex-1 justify-end items-center">
                <a class="font-bold text-base gem py-2 {{(request()->is('products')) ? 'text-green-500' : 'text-gray-800'}}"
                    href="/products">Nos produits</a>
                @guest
                <a class="font-bold text-base gem ml-3 py-2 {{(request()->is('login')) ? 'text-green-500' : 'text-gray-800'}}"
                    href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                @if (Route::has('register'))
                <a class="font-bold text-base gem ml-3 py-2 {{(request()->is('register')) ? 'text-green-500' : 'text-gray-800'}}"
                    href="{{ route('register') }}">{{ __("S'nscrire") }}</a>
                @endif
                @else
                @can('manage', auth()->user()->role)
                <a class="font-bold text-base gem ml-3 py-2" href="/dashboard/chefs">Dashboard</a>
                @endcan
                <dropdown align="right" width="auto" class="inline-block ml-3">
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
                            class="block px-4 py-2 font-bold text-base text-gray-400 lg:text-gray-900 lg:hover:text-gray-800"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Déconnexion') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </template>
                </dropdown>
                @endguest
            </div>
        </div>
    </div>
</nav>

@yield('content')

@include('layouts.footer')