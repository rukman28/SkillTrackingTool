<x-app-layout logoutPath=''>
    <x-slot name="header">
        <x-dashboard-name />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in as an Student!") }}
                    <div class="flex justify-center">
                        <h1 class=" text-3xl text-neutral-600">Under development...!</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
