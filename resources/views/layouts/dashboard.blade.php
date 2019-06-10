@include('layouts.header')

<div class="flex h-full w-full">

    {{-- Sidenav --}}
    <div class="hidden lg:block lg:w-64 lg:shrink-0 p-0 lg:p-4 bg-gray-200">
        <div class="flex items-center mb-4">
            <h3 class="text-xl font-bold mr-2">Dashboard</h3>
            <p class="px-2 py-1 text-xs text-white bg-gray-800 rounded-full">Propriétaires</p>
        </div>
        <nav>
            <ul>
                <li class="font-bold py-2 hover:underline">
                    <a href="/dashboard/chefs" class="{{ Request::is('dashboard/chefs') ? 'text-green-400' : ''}}">
                        Chefs
                    </a>
                </li>
                @if (Request::is('dashboard/chefs*'))
                <li class="font-bold py-2 hover:underline pl-2">
                    <a href="/dashboard/chefs/create"
                        class="{{ Request::is('dashboard/chefs/create') ? 'text-green-400' : ''}}">
                        Ajouter un Chef
                    </a>
                </li>
                @endif
                <li class="font-bold py-2 hover:underline">
                    <a href="/dashboard/sets"
                        class="{{ Request::is('dashboard/sets') ? 'text-green-400' : ''}}">Sets</a>
                </li>
            </ul>
        </nav>
    </div>
    {{-- Main Content --}}
    <div class="w-full">
        {{-- Nav --}}
        <nav class="bg-blue-900 shadow py-6">
            <div class="px-6">
                <div class="flex items-center justify-center">
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
                    <div class="flex-1 text-right">
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
            </div>
        </nav>

        <div class="p-4">
            @yield('content')
        </div>
    </div>

</div>

@include('layouts.footer')