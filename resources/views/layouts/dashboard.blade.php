<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div id="app" class="flex flex-col h-full">
        <nav class="bg-blue-900 shadow py-6">
            <div class="container mx-auto px-6 md:px-0">
                <div class="flex items-center justify-center">
                    <div class="mr-6">
                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                    <div class="flex-1 text-right">
                        <a class="text-white" href="/">Retour au site</a>
                        <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                            class="no-underline hover:underline text-gray-300 text-sm p-3"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Déconnexion') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <div class="flex h-full">
            {{-- Sidenav --}}
            <div class="w-64 p-4 bg-gray-200">
                <h3 class="text-xl font-bold mb-4">Dashboard</h3>
                <nav>
                    <ul>
                        <li class="font-bold py-2 hover:underline">
                            <a
                                href="/dashboard/chefs"
                                class="{{ Request::is('dashboard/chefs') ? 'text-green-400' : ''}}"
                            >
                                Chefs
                            </a>
                        </li>
                        @if (Request::is('dashboard/chefs*'))
                            <li class="font-bold py-2 hover:underline pl-2">
                                <a
                                    href="/dashboard/chefs/create"
                                    class="{{ Request::is('dashboard/chefs/create') ? 'text-green-400' : ''}}"
                                >
                                    Ajouter un Chef
                                </a>
                            </li>
                        @endif
                        <li class="font-bold py-2 hover:underline">
                            <a href="/dashboard/sets" class="{{ Request::is('dashboard/sets') ? 'text-green-400' : ''}}">Sets</a>
                        </li>
                    </ul>
                </nav>
            </div>
            {{-- Main Content --}}
            <div class="flex-1 p-4">
                @yield('content')
            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
