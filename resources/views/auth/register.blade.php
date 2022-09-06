@extends ('layouts/master')

@section ('register')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="h5 col-sm-4">
                    
                        <form method="POST" action="{{ route('register') }}" class="shadow-sm rounded px-8 pt-6 pb-8 mb-4">
                            @csrf

                            <!-- Name -->
                            <div class="mb-3 mt-3">
                                <x-label for="name" :value="__('Name')" />

                                <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-label for="email" :value="__('Email')" />

                                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-label for="password" :value="__('Password')" />

                                <x-input id="password" class="form-control"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                <x-input id="password_confirmation" class="form-control"
                                                type="password"
                                                name="password_confirmation" required />
                            </div>

                            <div class="flex items-center justify-end mb-4 mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                            </div>
                                <x-button class="bg-primary hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    {{ __('Register') }}
                                </x-button>
                            
                        </form>
                </div>
                <div class="col-sm-4"></div>
            </div>
    </x-auth-card>
</x-guest-layout>
@endsection
