<li class="flex items-center px-4 py-2 {{ $color }}">
    <svg class="w-6 mr-2 fill-current" viewBox="0 0 20 20">
        <path
            d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM7 6v2a3 3 0 1 0 6 0V6a3 3 0 1 0-6 0zm-3.65 8.44a8 8 0 0 0 13.3 0 15.94 15.94 0 0 0-13.3 0z" />
        </svg>
    {{ Auth::user()->full_name }}
</li>
@can('administrate', auth()->user()->role)
<li class="{{ $color }}">
    <a href="/admin/users" class="block px-4 py-2 {{ $color === 'text-gray-900' ? 'gem' : 'hover:text-gray-100' }}">
        Dashboard Admin
    </a>
</li>
@endcan

<li>
    <a href="{{ route('logout') }}" class="block px-4 py-2 {{ $color === 'text-gray-900' ? 'gem' : 'hover:text-gray-100' }} {{ $color }}"
        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        {{ __('Déconnexion') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        {{ csrf_field() }}
    </form>
</li>