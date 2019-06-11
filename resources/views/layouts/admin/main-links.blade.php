<li class="px-4 py-2 hover:underline {{ $color }}">
    <a href="/">
        Accueil
    </a>
</li>
<li class="px-4 py-2 hover:underline {{ $color }}">
    <a href="/dashboard/chefs">
        Dashboard Propriétaire
    </a>
</li>
<li class="px-4 py-2 hover:underline">
    <a href="{{ route('logout') }}" class="hover:underline {{ $color }}"
        onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Déconnexion') }}</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        {{ csrf_field() }}
    </form>
</li>