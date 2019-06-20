@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-lg px-4 pb-4">
            <div class="flex flex-col break-words bg-white rounded-lg shadow-md">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 rounded-t-lg">
                    {{ __('S\'inscrire') }}
                </div>

                <form class="flex flex-wrap sm:-mx-2 w-full p-6" method="POST" action="{{ route('register') }}">
                    @csrf

                    {{-- FirstName --}}
                    <label class="block w-full sm:w-1/2 sm:px-2">
                        <span class="text-gray-700 font-bold text-sm">Prénom:</span>
                        <input type="text"
                            class="form-input mt-1 block w-full {{ $errors->has('first_name') ? ' border-red-500' : '' }}"
                            name="first_name" value="{{ old('first_name') }}">
                        @if ($errors->has('first_name'))
                        <p class="mt-1 text-red-500 text-xs italic">
                            {{ $errors->first('first_name') }}
                        </p>
                        @endif
                    </label>

                    {{-- LastName --}}
                    <label class="mt-2 sm:mt-0 block w-full sm:w-1/2 sm:px-2">
                        <span class="text-gray-700 font-bold text-sm">Nom:</span>
                        <input type="text"
                            class="form-input mt-1 block w-full {{ $errors->has('last_name') ? ' border-red-500' : '' }}"
                            name="last_name" value="{{ old('last_name') }}">
                        @if ($errors->has('last_name'))
                        <p class="mt-1 text-red-500 text-xs italic mt-4">
                            {{ $errors->first('last_name') }}
                        </p>
                        @endif
                    </label>

                    {{-- City --}}
                    <label class="mt-2 block w-full sm:w-1/2 sm:px-2">
                        <span class="text-gray-700 font-bold text-sm">Ville:</span>
                        <input type="text"
                            class="form-input mt-1 block w-full {{ $errors->has('city') ? ' border-red-500' : '' }}"
                            name="city" value="{{ old('city') }}">
                        @if ($errors->has('city'))
                        <p class="mt-1 text-red-500 text-xs italic mt-4">
                            {{ $errors->first('city') }}
                        </p>
                        @endif
                    </label>

                    {{-- Country --}}
                    <label class="mt-2 block w-full sm:w-1/2 sm:px-2">
                        <span class="text-gray-700 font-bold text-sm">Pays:</span>
                        <input type="text"
                            class="form-input mt-1 block w-full {{ $errors->has('country') ? ' border-red-500' : '' }}"
                            name="country" value="{{ old('country') }}">
                        @if ($errors->has('country'))
                        <p class="mt-1 text-red-500 text-xs italic mt-4">
                            {{ $errors->first('country') }}
                        </p>
                        @endif
                    </label>

                    {{-- Email --}}
                    <label class="mt-2 block w-full sm:w-1/2 sm:px-2">
                        <span class="text-gray-700 font-bold text-sm">Email:</span>
                        <input type="email"
                            class="form-input mt-1 block w-full {{ $errors->has('email') ? ' border-red-500' : '' }}"
                            name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                        <p class="mt-1 text-red-500 text-xs italic mt-4">
                            {{ $errors->first('email') }}
                        </p>
                        @endif
                    </label>

                    {{-- Password --}}
                    <label class="mt-2 block w-full sm:w-1/2 sm:px-2">
                        <span class="text-gray-700 font-bold text-sm">Mot de passe:</span>
                        <input type="password"
                            class="form-input mt-1 block w-full {{ $errors->has('password') ? ' border-red-500' : '' }}"
                            name="password" value="{{ old('password') }}">
                        @if ($errors->has('password'))
                        <p class="mt-1 text-red-500 text-xs italic mt-4">
                            {{ $errors->first('password') }}
                        </p>
                        @endif
                    </label>

                    {{-- Confirm Password --}}
                    <label class="mt-2 block w-full sm:w-1/2 sm:px-2">
                        <span class="text-gray-700 font-bold text-sm">Confirmer le mot de passe:</span>
                        <input type="password"
                            class="form-input mt-1 block w-full"
                            name="password_confirmation">
                    </label>

                    <div class="mt-2 flex flex-wrap px-2">
                        <button type="submit" class="btn-primary font-bold">
                            {{ __('S\'inscrire') }}
                        </button>

                        <p class="mt-4 w-full text-xs text-gray-700 py-2">
                            Vous avez déjà un compte ?
                            <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('login') }}">
                                Se connecter
                            </a>
                        </p>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection