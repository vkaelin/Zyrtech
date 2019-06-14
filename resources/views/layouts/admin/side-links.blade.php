<li>
    <a href="/admin/users"
        class="{{ Request::is('admin/users') ? 'text-green-400' : ''}} flex items-center px-4 py-2 hover:bg-gray-800 lg:hover:bg-gray-700">
        <svg class="icon" viewBox="0 0 20 20">
            <path
                d="M7 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0 1c2.15 0 4.2.4 6.1 1.09L12 16h-1.25L10 20H4l-.75-4H2L.9 10.09A17.93 17.93 0 0 1 7 9zm8.31.17c1.32.18 2.59.48 3.8.92L18 16h-1.25L16 20h-3.96l.37-2h1.25l1.65-8.83zM13 0a4 4 0 1 1-1.33 7.76 5.96 5.96 0 0 0 0-7.52C12.1.1 12.53 0 13 0z" />
        </svg>
        <span class="ml-2"></span>Utilisateurs
    </a>
</li>

@if (Request::is('admin/users*'))
<li>
    <a href="/admin/users/create"
        class="{{ Request::is('admin/users/create') ? 'text-green-400' : ''}} flex items-center py-2 pl-8 hover:bg-gray-800 lg:hover:bg-gray-700">
        <svg class="icon" viewBox="0 0 20 20">
            <path
                d="M11 9h4v2h-4v4H9v-4H5V9h4V5h2v4zm-1 11a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z" />
        </svg>
        <span class="ml-2">Ajouter un Utilisateur</span>
    </a>
</li>
@endif

<li class="lg:mt-2">
    <a href="/admin/products"
        class="{{ Request::is('admin/products') ? 'text-green-400' : ''}} flex items-center px-4 py-2 hover:bg-gray-800 lg:hover:bg-gray-700">
        <svg class="icon" viewBox="0 0 20 20">
            <path
                d="M5.33 12.77A4 4 0 1 1 3 5.13V5a4 4 0 0 1 5.71-3.62 3.5 3.5 0 0 1 6.26 1.66 2.5 2.5 0 0 1 2 2.08 4 4 0 1 1-2.7 7.49A5.02 5.02 0 0 1 12 14.58V18l2 1v1H6v-1l2-1v-3l-2.67-2.23zM5 10l3 3v-3H5z" />
        </svg>
        <span class="ml-2">Produits</span>
    </a>
</li>

@if (Request::is('admin/products*'))
<li>
    <a href="/admin/products/create"
        class="{{ Request::is('admin/products/create') ? 'text-green-400' : ''}} flex items-center py-2 pl-8 hover:bg-gray-800 lg:hover:bg-gray-700">
        <svg class="icon" viewBox="0 0 20 20">
            <path
                d="M11 9h4v2h-4v4H9v-4H5V9h4V5h2v4zm-1 11a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z" />
        </svg>
        <span class="ml-2">Ajouter un Produit</span>
    </a>
</li>

<li>
    <a href="/admin/products/attributes"
        class="{{ Request::is('admin/products/attributes') ? 'text-green-400' : ''}} flex items-center py-2 pl-8 hover:bg-gray-800 lg:hover:bg-gray-700">
        <svg class="icon" viewBox="0 0 20 20">
            <path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" /></svg>
        <span class="ml-2">Lister les catégories</span>
    </a>
</li>
@endif

@if (Request::is('admin/products/attributes*'))
<li>
    <a href="/admin/products/attributes/types/create"
        class="{{ Request::is('admin/products/attributes/types/create') ? 'text-green-400' : ''}} flex items-center py-2 pl-12 hover:bg-gray-800 lg:hover:bg-gray-700">
        <svg class="icon" viewBox="0 0 20 20">
            <path
                d="M11 9h4v2h-4v4H9v-4H5V9h4V5h2v4zm-1 11a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z" />
        </svg>
        <span class="ml-2">Ajouter un type</span>
    </a>
</li>

<li>
    <a href="/admin/products/attributes/periods/create"
        class="{{ Request::is('admin/products/attributes/periods/create') ? 'text-green-400' : ''}} flex items-center py-2 pl-12 hover:bg-gray-800 lg:hover:bg-gray-700">
        <svg class="icon" viewBox="0 0 20 20">
            <path
                d="M11 9h4v2h-4v4H9v-4H5V9h4V5h2v4zm-1 11a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z" />
        </svg>
        <span class="ml-2">Ajouter une période</span>
    </a>
</li>

<li>
    <a href="/admin/products/attributes/labels/create"
        class="{{ Request::is('admin/products/attributes/labels/create') ? 'text-green-400' : ''}} flex items-center py-2 pl-12 hover:bg-gray-800 lg:hover:bg-gray-700">
        <svg class="icon" viewBox="0 0 20 20">
            <path
                d="M11 9h4v2h-4v4H9v-4H5V9h4V5h2v4zm-1 11a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z" />
        </svg>
        <span class="ml-2">Ajouter un label</span>
    </a>
</li>
@endif