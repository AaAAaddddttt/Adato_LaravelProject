<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <div>
                        <h3> hello Adato</h3>
                        <h4 class="bg-blue-400 text-black-100">Lorem ipsum dolor sit amet consectetur adipisicing
                             elit. Animi, quibusdam soluta deleniti, ad laboriosam
                              vitae adipisci itaque perferendis, odit delectus ab 
                                beatae alias amet error repellat fugit velit consequuntur sed.<h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
