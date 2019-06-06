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

        <div class="flex h-full overflow-hidden">
            {{-- Sidenav --}}
            <div class="w-64 p-4 bg-gray-200">
                <div class="flex items-center mb-4">
                    <h3 class="text-xl font-bold mr-2">Dashboard</h3>
                    <p class="px-2 py-1 text-xs text-white bg-gray-800 rounded-full">Admin</p>
                </div>
                <nav>
                    <ul>
                        <li class="font-bold py-2 hover:underline">
                            <a href="/admin/users"
                                class="{{ Request::is('admin/users') ? 'text-green-400' : ''}}">
                                Utilisateurs
                            </a>
                        </li>
                        @if (Request::is('admin/users*'))
                        <li class="font-bold py-2 hover:underline pl-2">
                            <a href="/admin/users/create"
                                class="{{ Request::is('admin/users/create') ? 'text-green-400' : ''}}">
                                Ajouter un utilisateur
                            </a>
                        </li>
                        @endif
                        <li class="font-bold py-2 hover:underline">
                            <a href="/admin/products"
                                class="{{ Request::is('admin/products') ? 'text-green-400' : ''}}">Produits</a>
                        </li>
                        @if (Request::is('admin/products*'))
                        <li class="font-bold py-2 hover:underline pl-2">
                            <a href="/admin/products/create"
                                class="{{ Request::is('admin/products/create') ? 'text-green-400' : ''}}">
                                Ajouter un produit
                            </a>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
            {{-- Main Content --}}
            <div class="flex-1">
                {{-- Nav --}}
                <nav class="bg-blue-900 shadow py-6">
                    <div class="container mx-auto px-6 md:px-0">
                        <div class="flex items-center justify-center">
                            <div class="mr-6">
                                <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 mr-3">
                                    {{ config('app.name', 'Laravel') }}
                                </a>
                            </div>
                            <div class="flex-1 text-right">
                                <a class="text-white" href="/">Retour au site</a>
                                <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}</span>

                                <a href="{{ route('logout') }}"
                                    class="hover:underline text-gray-300 text-sm p-3"
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

    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>