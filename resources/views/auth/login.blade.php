@extends('layouts.app')

@section('content')
<div class="flex flex-wrap justify-center">
    <div class="w-full max-w-sm px-4">
        <div class="flex flex-col break-words bg-white rounded-lg shadow-md">

            <div class="flex justify-between items-center font-semibold bg-gray-200 text-gray-700 py-3 px-6 rounded-t-lg">
                {{ __('Se connecter') }}
                <a @click.prevent="$modal.show('login-chef')"
                    class="bg-red-600 text-white text-sm px-4 py-2 cursor-pointer rounded-full hover:bg-red-500">
                    Vous êtes Chef ?
                </a>
            </div>

            <form class="w-full p-6" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="flex flex-wrap mb-6">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                        {{ __('Email') }}:
                    </label>

                    <input id="email" type="email"
                        class="form-input block w-full border-gray-400 {{ $errors->has('email') ? ' border-red-500' : '' }}"
                        name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $errors->first('email') }}
                    </p>
                    @endif
                </div>

                <div class="flex flex-wrap mb-6">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                        {{ __('Mot de passe') }}:
                    </label>

                    <input id="password" type="password"
                        class="form-input block w-full border-gray-400 {{ $errors->has('password') ? ' border-red-500' : '' }}"
                        name="password" required>

                    @if ($errors->has('password'))
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $errors->first('password') }}
                    </p>
                    @endif
                </div>

                <div class="flex mb-6">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <span class="text-sm text-gray-700 ml-3">Se souvenir de moi</span>
                    </label>
                </div>

                <div class="flex flex-wrap items-center">
                    <button type="submit" class="btn-primary font-bold">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                    <a class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline ml-auto"
                        href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                    @endif

                    @if (Route::has('register'))
                    <p class="w-full text-xs text-center text-gray-700 mt-8 -mb-4">
                        Vous n'avez pas encore de compte ?
                        <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('register') }}">
                            S'inscrire
                        </a>
                    </p>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>

<login-chef-modal></login-chef-modal>

@endsection