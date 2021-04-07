<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>{{ Auth::user()->id }}</div>
                    <div>{{ Auth::user()->name }}</div>
                    <div>{{ Auth::user()->email }}</div>
                    <div>{{ Auth::user()->password }}</div>
                    <div>{{ Auth::user()->isOppasser }}</div>
                    <div>{{ Auth::user()->isHuisdier }}</div>
                    <div>{{ Auth::user()->isBlocked }}</div>
                    <div>{{ Auth::user()->role }}</div>
                    <div>{{ Auth::user()->geboortedatum }}</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
