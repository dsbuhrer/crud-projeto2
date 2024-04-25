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
                <div class="p-6 text-gray-900">
                    <form action="{{ url('cars/'.$car->id) }}" method="post">
                        @csrf
                        @method("PATCH")

                        <label for="name" class="block mb-1">Nome</label>
                        <input type="text" name="name" id="name" value="{{ $car->name ?? '' }}"
                            class="border border-gray-300 rounded-md px-3 py-2 w-full mb-3 @error('name') border-red-500 @enderror"
                            required>
                        @error('name')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror

                        <label for="model" class="block mb-1">Modelo</label>
                        <input type="text" name="model" id="model" value="{{ $car->model ?? '' }}"
                            class="border border-gray-300 rounded-md px-3 py-2 w-full mb-3 @error('model') border-red-500 @enderror"
                            required>
                        @error('model')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror

                        <label for="brand" class="block mb-1">Marca</label>
                        <input type="text" name="brand" id="brand" value="{{ $car->brand ?? '' }}"
                            class="border border-gray-300 rounded-md px-3 py-2 w-full mb-3 @error('brand') border-red-500 @enderror"
                            required>
                        @error('brand')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror

                        <label for="year" class="block mb-1">Ano</label>
                        <input type="text" name="year" id="year" value="{{ $car->year ?? '' }}"
                            class="border border-gray-300 rounded-md px-3 py-2 w-full mb-3 @error('year') border-red-500 @enderror"
                            required>
                        @error('year')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror

                        <label for="price" class="block mb-1">Preço</label>
                        <input type="text" name="price" id="price" value="{{ $car->price ?? '' }}"
                            class="border border-gray-300 rounded-md px-3 py-2 w-full mb-3 @error('price') border-red-500 @enderror"
                            required>
                        @error('price')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror

                        <button type="submit" class="bg-green-500 text-white rounded-md px-4 py-2">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
