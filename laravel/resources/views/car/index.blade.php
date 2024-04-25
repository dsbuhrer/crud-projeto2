<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Carros') }}
            </h2>
            @if (session('message'))
                <div id="alertMessage" class="fixed inset-x-0 bottom-0 z-50 px-4 py-2 bg-green-500 text-white">
                    {{ session('message') }}
                </div>
            @endif
            <a href="{{ url('cars/create') }}">
                <button
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Novo Carro
                </button>
            </a>
        </div>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="overflow-x-auto">
                        <table class="table-auto min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nome</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Modelo</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Marca</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Ano</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Preço</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Ações</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($cars as $car)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $car->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $car->model }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $car->brand }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $car->year }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $car->price }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center space-x-2">
                                                <a href="{{ url('/cars/' . $car->id) }}" title="Editar Carro">

                                                    <button class="text-blue-500 hover:text-blue-700 focus:outline-none"
                                                        aria-label="Visualizar">
                                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z"
                                                                stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path
                                                                d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z"
                                                                stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </button>
                                                </a>
                                                <a href="{{ url('/cars/' . $car->id . '/edit') }}" title="Editar Carro">
                                                    <button
                                                        class="text-green-500 hover:text-green-700 focus:outline-none"
                                                        aria-label="Editar">
                                                        <svg fill="#006eff" class="w-5 h-5" version="1.1"
                                                            id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            viewBox="0 0 306.637 306.637" xml:space="preserve"
                                                            stroke="#006eff">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path
                                                                    d="M12.809,238.52L0,306.637l68.118-12.809l184.277-184.277l-55.309-55.309L12.809,238.52z M60.79,279.943l-41.992,7.896 l7.896-41.992L197.086,75.455l34.096,34.096L60.79,279.943z">
                                                                </path>
                                                                <path
                                                                    d="M251.329,0l-41.507,41.507l55.308,55.308l41.507-41.507L251.329,0z M231.035,41.507l20.294-20.294l34.095,34.095 L265.13,75.602L231.035,41.507z">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                </a>
                                                <form method="POST" action="{{ url('/cars' . '/' . $car->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}

                                                    <button type="submit"
                                                        class="text-red-500 hover:text-red-700 focus:outline-none"
                                                        aria-label="Apagar"
                                                        onclick="return confirm('Tem certeza que quer deletar {{ $car->name }}?')">
                                                        <svg class="w-5 h-5" fill="#FF0000"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                            <path
                                                                d="M3 6v18h18v-18h-18zm5 14c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm4-18v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.315c0 .901.73 2 1.631 2h5.712z" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function confirmarExclusao(id) {
        if (confirm('Tem certeza que deseja excluir este item?')) {
            // Obter o token CSRF do Laravel
            const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // Configurar a solicitação DELETE com o token CSRF no cabeçalho
            fetch("{{ url('/cars') }}" + '/' + id, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': token
                    }
                })
                .then(data => alert("Item de ID " + data + " foi excluído"))
                .catch(error => console.error('Erro ao excluir item:', error));

        }
    }

    // Adiciona uma classe para esconder o elemento após 5 segundos
    setTimeout(function() {
        document.getElementById('alertMessage').classList.add('hidden');
    }, 5000);
</script>
