<div>
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Histórico de cambios
    </label>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Aula origen
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aula destino
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Instante
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ordenador->cambios as $cambio)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{ $cambio->origen->nombre }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $cambio->destino->nombre }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $cambio->created_at }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        <button type="button" wire:click="borrar" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Borrar histórico</button>
    </div>
</div>
