
<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <livewire:welcome.navigation />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <h1 class="text-2xl text-gray-800 dark:text-gray-200 text-center">
                Upload Photos
            </h1>
            <hr>
            <div class="p-4 sm:p-8 ">
                <div class="max-w-xl text-gray-800 dark:text-gray-200">
                    
                    <livewire:photo-upload />

                </div>
        </div>
    </div>
</x-guest-layout>