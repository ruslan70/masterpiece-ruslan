@extends ('layouts/master')
@section ('dashboard')
 <div class="postDetailsBox">
<x-app-layout>
   
        <x-slot name="header">
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
  

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-primary overflow-hidden shadow-sm sm:rounded-lg">
                <h5 class="p-3 text-center text-white font-semibold border-b border-gray-200">
                    {{Auth::user()->name}}, Sie sind eingeloggt!
                </h5>
            </div>
        </div>
    </div>
</x-app-layout>  
</div>
@endsection
