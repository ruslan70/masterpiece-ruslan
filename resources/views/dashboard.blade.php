@extends ('layouts/master')
@section ('dashboard')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-primary text-white border-b border-gray-200">
                    Sie sind eingeloggt!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection
