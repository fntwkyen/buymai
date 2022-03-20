<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            สวัสดี {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto">
            <h1>Home Pages</h1>
        </div>

    </div>
</x-app-layout>
