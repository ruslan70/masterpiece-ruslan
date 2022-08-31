@extends ('layouts/master')

@section ('login')
<x-guest-layout>
    {{-- <img src="{{ asset('img/logo-name.png') }}" class="img-fluid rounded mx-auto d-block m-2"
        alt="Responsive image"> --}}
    <x-auth-card>
        
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <!-- <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden text-center"> -->
    <div class="w-full max-w-xs text-center">
        <form method="POST" action="{{ route('login') }}" class="shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <x-label class="block text-gray-700 text-sm font-bold mb-2" for="email" :value="__('Email')" />

                <x-input id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mb-6">
                <x-label class="block text-gray-700 text-sm font-bold mb-2" for="password" :value="__('Password')" />

                <x-input id="password" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                <p class="text-red-500 text-xs italic">Please choose a password.</p>
            </div>

            

            <!-- Forgot your password? -->
            <div class="flex items-center justify-between">
                @if (Route::has('password.request'))
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <!-- Remember Me -->
            <div class="block mb-2 mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            
    
                <x-button class="bg-primary hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </div>
    </x-auth-card>
</x-guest-layout>
@endsection
