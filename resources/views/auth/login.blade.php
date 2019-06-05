@extends('layouts.app')

@section('content')
<div class="flex flex-wrap justify-center">
    <div class="w-full max-w-sm">
        <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

            <div class="flex justify-between items-center font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                {{ __('Se connecter') }}
                <a
                @click.prevent="$modal.show('login-chef')"
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
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('email') ? ' border-red-500' : '' }}"
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
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('password') ? ' border-red-500' : '' }}"
                        name="password" required>

                    @if ($errors->has('password'))
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $errors->first('password') }}
                    </p>
                    @endif
                </div>

                <div class="flex mb-6">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="text-sm text-gray-700 ml-3" for="remember">
                        {{ __('Se souvenir de moi') }}
                    </label>
                </div>

                <div class="flex flex-wrap items-center">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
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
                            S'inscire
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