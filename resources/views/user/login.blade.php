<!DOCTYPE html> <html lang="en"> <head> <meta charset="utf-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"> <meta name="description" content=""> <meta
    name="author" content="">

<title>Login</title>
<link rel="stylesheet" href="{{ asset('css/business-casual.css') }}">
</head> <body>
<x-guest-layout> <x-authentication-card> <x-slot name="logo">
    <img src="img/logo.png" alt="Your Logo" style="height:150px;width:150px;display: block; margin-left: auto;
    margin-right: auto; margin-bottom:0px">
    </x-slot>

    <x-validation-errors class="mb-4" />

    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
    {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
            autofocus autocomplete="username" />
        </div>

        <div class="mt-4">
            <x-label for="password" value="{{ __('Password') }}" />
            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="flex items-center">
                <x-checkbox id="remember_me" name="remember" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif

            <a href="{{ route('index') }}">
                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </a>
        </div>
    </form>
    </x-authentication-card>
    </x-guest-layout>
    </body>

    </html>