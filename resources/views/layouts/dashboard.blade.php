@include('layouts.header')

<div class="flex h-full w-full">

    {{-- Sidenav Desktop --}}
    <div class="hidden lg:block lg:w-64 lg:shrink-0 lg:py-4 lg:text-left">
        <div class="flex items-center justify-center mb-4">
            <h3 class="text-xl font-bold mr-2">Dashboard</h3>
            <p class="px-2 py-1 text-xs text-white bg-gray-800 rounded-full">Propriétaires</p>
        </div>
        <nav>
            <ul>
                @include('layouts.side-links-dashboard')
            </ul>
        </nav>
    </div>

    {{-- Main Content --}}
    <div class="w-full">
        {{-- Nav --}}
        <nav class="bg-blue-900 shadow py-6">
            <div class="hidden lg:flex items-center justify-center px-4">
                <div class="mr-6">
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 mr-3">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    @can('administrate', auth()->user()->role)
                    <a href="/admin/users" class="text-lg text-gray-100 hover:underline">
                        Dashboard Admin
                    </a>
                    @endcan
                </div>
                <div class="hidden lg:block flex-1 text-right">
                    <a class="text-white" href="/">Retour au site</a>
                    <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}" class="hover:underline text-gray-300 text-sm p-3"
                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">{{ __('Déconnexion') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>

            {{-- Nav Mobile --}}
            <div class="block lg:hidden">
                <side-nav title="Dashboard" tag="Propriétaires">
                    @include('layouts.side-links-dashboard')

                    <hr class="w-full bg-blue-800" style="height: 1px;">

                    <li class="px-4 py-2 hover:underline">
                        <a href="/" class="{{ Request::is('dashboard/chefs') ? 'text-green-400' : ''}}">
                            Acceuil
                        </a>
                    </li>

                    @can('administrate', auth()->user()->role)
                    <li class="px-4 py-2 hover:underline">
                        <a href="/" class="{{ Request::is('dashboard/chefs') ? 'text-green-400' : ''}}">
                            Dashboard Admin
                        </a>
                    </li>
                    @endcan

                    <li class="px-4 py-2 hover:underline">
                        <a href="{{ route('logout') }}" class="hover:underline"
                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">{{ __('Déconnexion') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </side-nav>
            </div>
        </nav>

        <div class="p-4">
            @yield('content')
        </div>
    </div>

</div>

@include('layouts.footer')