@include('layouts.header')

<nav class="bg-blue-900 shadow mb-8 py-6">
    <div class="container mx-auto px-6 md:px-0">
        <div class="flex items-center justify-center">
            <div class="mr-6">
                <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 mr-4">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <a class="text-gray-100" href="/products">Produits</a>
            </div>
            <div class="flex-1 text-right">
                @guest
                <a class="hover:underline text-gray-300 text-sm p-3"
                    href="{{ route('login') }}">{{ __('Connexion') }}</a>
                @if (Route::has('register'))
                <a class=" hover:underline text-gray-300 text-sm p-3"
                    href="{{ route('register') }}">{{ __('Inscription') }}</a>
                @endif
                @else
                @can('manage', auth()->user()->role)
                <a class="text-white" href="/dashboard/chefs">Dashboard</a>
                @endcan
                <span class="text-gray-300 text-sm pr-4">
                    {{ Auth::user()->full_name }}
                </span>

                <a href="{{ route('logout') }}" class="hover:underline text-gray-300 text-sm p-3" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Déconnexion') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    {{ csrf_field() }}
                </form>
                @endguest
            </div>
        </div>
    </div>
</nav>

<div class="container mx-auto">
    @yield('content')
</div>

@include('layouts.footer')
