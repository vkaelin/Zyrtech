<li>
    <a href="/dashboard/chefs"
        class="{{ Request::is('dashboard/chefs') ? 'text-green-400' : ''}} flex items-center px-4 py-2 hover:bg-gray-800">
        <svg class="icon" viewBox="0 0 20 20">
            <path
                d="M18 11v7a2 2 0 0 1-4 0v-5h-2V3a3 3 0 0 1 3-3h3v11zM4 10a2 2 0 0 1-2-2V1a1 1 0 0 1 2 0v4h1V1a1 1 0 0 1 2 0v4h1V1a1 1 0 0 1 2 0v7a2 2 0 0 1-2 2v8a2 2 0 0 1-4 0v-8z" />
        </svg>
        <span class="ml-2">Chefs</span>
    </a>
</li>

@if (Request::is('dashboard/chefs*'))
<li>
    <a href="/dashboard/chefs/create"
        class="{{ Request::is('dashboard/chefs/create') ? 'text-green-400' : ''}} flex items-center py-2 pl-8 hover:bg-gray-800">
        <svg class="icon" viewBox="0 0 20 20">
            <path
                d="M11 9h4v2h-4v4H9v-4H5V9h4V5h2v4zm-1 11a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z" />
        </svg>
        <span class="ml-2">Ajouter un Chef</span>
    </a>
</li>
@endif

<li class="lg:mt-2">
    <a href="/dashboard/sets"
        class="{{ Request::is('dashboard/sets') ? 'text-green-400' : ''}} flex items-center px-4 py-2 hover:bg-gray-800">
        <svg class="icon" viewBox="0 0 20 20">
            <path d="M10 1l10 6-10 6L0 7l10-6zm6.67 10L20 13l-10 6-10-6 3.33-2L10 15l6.67-4z" />
        </svg>
        <span class="ml-2">Sets</span>
    </a>
</li>