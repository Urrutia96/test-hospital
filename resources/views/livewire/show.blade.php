<div>
    <h1 class="text-center font-bold text-xl">Receta medica</h1>
    <br>

    <div>
        <div>Fecha: <date>{{ $receta->created_at->format('d-m-Y') }}</date>
        </div>
        <div>Establecimiento: {{ $receta->medico->establecimiento->name }}</div>
        <div>Medico Encargado: {{ $receta->medico->nombre }}</div>
        <div>Nombre Paciente: {{ $receta->pasiente->nombre }} <span class="ml-4">Edad: {{ $receta->pasiente->edad }}</span> </div>
        <div>No. Receta: {{ $receta->id }}</div>

        <div class="mt-10 relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Cantidad
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Medicamento
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Dosis
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Indicaciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($receta->items as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{ $item->cantidad }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{ $item->medicamento->nombre }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{ $item->dosis }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{ $item->medicamento->indicaciones }}
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>