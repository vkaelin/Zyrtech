<li class="px-4 py-2 hover:underline">
    <a href="/">
        Accueil
    </a>
</li>
@can('administrate', auth()->user()->role)
<li class="px-4 py-2 hover:underline">
    <a href="/admin/users">
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