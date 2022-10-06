
    
<table class="z-10 w-full text-sm text-left text-gray-500 ">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
        <tr>
            <th scope="col" class="px-6 py-3">
                Nombre
            </th>
            <th scope="col" class="px-6 py-3">
                Categoría
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $items as $item )
        <tr class="bg-white border-b ">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                {{$item->nombre}}
            </th>
            <td class="px-6 py-4">
                {{$item->categoria}}
            </td>
            <td class="px-6 py-4 text-right">
                <a href="#" class="font-medium text-blue-600  hover:underline">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


