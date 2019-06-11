<li class="font-bold px-4 py-2 hover:underline">
    <a href="/dashboard/chefs" class="{{ Request::is('dashboard/chefs') ? 'text-green-400' : ''}}">
        Chefs
    </a>
</li>
@if (Request::is('dashboard/chefs*'))
<li class="font-bold px-4 py-2 hover:underline pl-2">
    <a href="/dashboard/chefs/create" class="{{ Request::is('dashboard/chefs/create') ? 'text-green-400' : ''}}">
        Ajouter un Chef
    </a>
</li>
@endif
<li class="font-bold px-4 py-2 hover:underline">
    <a href="/dashboard/sets" class="{{ Request::is('dashboard/sets') ? 'text-green-400' : ''}}">Sets</a>
</li>