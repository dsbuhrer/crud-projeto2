<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Estatísticas</h3>
                    </div>
                    <div class="bg-gray-100 rounded-lg p-6">
                        <div class="text-xl font-semibold text-gray-800 mb-4">Total de Carros cadastrados</div>
                        <div class="text-4xl font-bold text-gray-900">{{ $count }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
