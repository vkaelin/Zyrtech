<li class="flex items-center px-4 py-2 text-gray-400 lg:text-gray-900">
    <svg class="w-6 mr-2 fill-current" viewBox="0 0 20 20">
        <path
            d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM7 6v2a3 3 0 1 0 6 0V6a3 3 0 1 0-6 0zm-3.65 8.44a8 8 0 0 0 13.3 0 15.94 15.94 0 0 0-13.3 0z" />
    </svg>
    {{ Auth::user()->full_name }}
</li>
<li class="text-gray-400 lg:text-gray-900">
    <a href="/dashboard/chefs" class="block px-4 py-2 hover:text-gray-100 lg:hover:text-gray-900 gem">
        Dashboard Propriétaire
    </a>
</li>
<li>
    <a href="{{ route('logout') }}" class="block px-4 py-2 text-gray-400 lg:text-gray-900 hover:text-gray-100 lg:hover:text-gray-900 gem"
        onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Déconnexion') }}</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        {{ csrf_field() }}
    </form>
</li>