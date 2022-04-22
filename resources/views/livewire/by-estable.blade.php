<div>
    <div>
        <div class="mt-10 relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No. receta
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Ver</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recetas as $r)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{ $r->id }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{ $r->created_at->format('d-m-Y') }}
                        </th>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('receta', $r->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ver</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>