@extends ('layouts/master')
@section ('dashboard')
 
<x-app-layout>
<div class="postDetailsBox">
   
        <x-slot name="header">
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
                
            </h2>
        </x-slot>
  

    <div class="pt-4 pb-4 py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-primary overflow-hidden shadow-sm sm:rounded-lg">
                <div class="h3 p-3 text-center text-white font-semibold border-b border-gray-200">
                    {{Auth::user()->name}}, Sie sind eingeloggt!
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>  

@endsection
