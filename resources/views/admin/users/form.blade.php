@csrf
<div class="flex flex-wrap -mx-2">
    <label class="mt-4 block w-full sm:w-1/2 px-2">
        <span class="text-gray-700">Prénom</span>
        <input class="form-input mt-1 block w-full border-gray-400" type="text" name="first_name"
            value="{{ $user->first_name }}">
    </label>

    <label class="mt-4 block w-full sm:w-1/2 px-2">
        <span class="text-gray-700">Nom</span>
        <input class="form-input mt-1 block w-full border-gray-400" type="text" name="last_name"
            value="{{ $user->last_name }}">
    </label>
    <label class="mt-4 block w-full sm:w-1/2 px-2">
        <span class="text-gray-700">Ville</span>
        <input class="form-input mt-1 block w-full border-gray-400" type="text" name="city" value="{{ $user->city }}">
    </label>

    <label class="mt-4 block w-full sm:w-1/2 px-2">
        <span class="text-gray-700">Pays</span>
        <input class="form-input mt-1 block w-full border-gray-400" type="text" name="country"
            value="{{ $user->country }}">
    </label>

    <label class="mt-4 block w-full sm:w-1/2 px-2">
        <span class="text-gray-700">Email</span>
        <input class="form-input mt-1 block w-full border-gray-400" type="email" name="email" value="{{ $user->email }}"
            autocomplete="off">
    </label>

    <label class="mt-4 block w-full sm:w-1/2 px-2">
        <span class="text-gray-700">Mot de passe</span>
        <input class="form-input mt-1 block w-full border-gray-400" type="password" name="password" autocomplete="off">
    </label>

    <div class="mt-4">
        <span class="text-gray-700">Role</span>
        <div class="mt-2 sm:flex">
            <div>
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio text-green-600 border-gray-400" name="role_id" value="3"
                        {{ $user->role && $user->role->id === 3 ? 'checked' : '' }}>
                    <span class="ml-2">Chef</span>
                </label>
            </div>
            <div class="mt-2 sm:mt-0 sm:ml-4">
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio text-green-600 border-gray-400" name="role_id" value="2"
                        {{ $user->role && $user->role->id === 2 ? 'checked' : '' }}>
                    <span class="ml-2">Propriétaire</span>
                </label>
            </div>
            <div class="mt-2 sm:mt-0 sm:ml-4">
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio text-green-600 border-gray-400" name="role_id" value="1"
                        {{ $user->role && $user->role->id === 1 ? 'checked' : '' }}>
                    <span class="ml-2">Admin</span>
                </label>
            </div>
        </div>
    </div>
</div>

@include ('partials.errors')