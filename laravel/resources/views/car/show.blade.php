<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Carros') }}
        </h2>
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-6">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900">
                                <h2 class="text-2xl font-semibold mb-4">Detalhes do Carro</h2>
                                <div class="bg-gray-100 rounded-lg p-4">
                                    <h3 class="text-lg font-semibold mb-2">{{ $car->name }}</h3>
                                    <p class="text-gray-600 mb-2">Modelo: {{ $car->model }}</p>
                                    <p class="text-gray-600 mb-2">Marca: {{ $car->brand }}</p>
                                    <p class="text-gray-600 mb-2">Ano: {{ $car->year }}</p>
                                    <p class="text-gray-600 mb-2">Preço: {{ $car->price }}</p>
                                    <!-- Add edit and delete buttons here if needed -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
