<li class="px-4 py-2 hover:underline">
    <a href="/admin/users" class="{{ Request::is('admin/users') ? 'text-green-400' : ''}}">
        Utilisateurs
    </a>
</li>
@if (Request::is('admin/users*'))
<li class="px-4 py-2 hover:underline pl-6">
    <a href="/admin/users/create" class="{{ Request::is('admin/users/create') ? 'text-green-400' : ''}}">
        Ajouter un utilisateur
    </a>
</li>
@endif
<li class="px-4 py-2 hover:underline">
    <a href="/admin/products" class="{{ Request::is('admin/products') ? 'text-green-400' : ''}}">Produits</a>
</li>
@if (Request::is('admin/products*'))
<li class="px-4 py-2 hover:underline pl-6">
    <a href="/admin/products/create" class="{{ Request::is('admin/products/create') ? 'text-green-400' : ''}}">
        Ajouter un produit
    </a>
</li>
<li class="px-4 py-2 hover:underline pl-6">
    <a href="/admin/products/attributes" class="{{ Request::is('admin/products/attributes') ? 'text-green-400' : ''}}">
        Lister les attributs
    </a>
</li>
@endif
@if (Request::is('admin/products/attributes*'))
<li class="px-4 py-2 hover:underline pl-10">
    <a href="/admin/products/attributes/types/create"
        class="{{ Request::is('admin/products/attributes/types/create') ? 'text-green-400' : ''}}">
        Ajouter un type
    </a>
</li>
<li class="px-4 py-2 hover:underline pl-10">
    <a href="/admin/products/attributes/periods/create"
        class="{{ Request::is('admin/products/attributes/periods/create') ? 'text-green-400' : ''}}">
        Ajouter une période
    </a>
</li>
<li class="px-4 py-2 hover:underline pl-10">
    <a href="/admin/products/attributes/labels/create"
        class="{{ Request::is('admin/products/attributes/labels/create') ? 'text-green-400' : ''}}">
        Ajouter un label
    </a>
</li>
@endif