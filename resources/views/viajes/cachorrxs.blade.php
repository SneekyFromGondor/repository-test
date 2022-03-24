<x-app-layout>

<div class="container">
    <table class="table w-full border-separate mt-3">
        <thead>
            <tr>
                <th class="border border-gray-400 px-4 py-2 text-gray-800">Nombre</th>
                <th class="border border-gray-400 px-4 py-2 text-gray-800">Variante</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cachorrxs as $ca)
                <tr>
                    <td class="border border-gray-400 px-4 py-2 text-lg text-center font-bold text-gray-700 hover:text-blue-700">
                        <a href="{{route('viajes.raza', $ca)}}">{{$ca->nombre}}</a>
                    </td>
                    <td class="border border-gray-400 px-4 py-2 text-lg">
                        <p class="text-center hover:text-opacity-75">
                            @if($ca->variando['var_nombre'])
                                <select class="justify-center rounded-lg w-60 border border-gray-300 shadow-sm text-md text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-offset-gray-100 focus:ring-blue-300 focus:border-blue-300">
                                    @foreach($ca->variando['var_nombre'] as $v_n)
                                        <option>{{$v_n}}  </option>
                                    @endforeach
                                </select>
                            @else No posee @endif
                        </p>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!---resposive: sm: grid-cols-1 md:grid-cols-2 lg:grid-cols-4 / col-start
<div class="container">gap-x-4 o gap-y-4 para filas o cols / grid-cols-4 (4 columnas)
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 grid-rows-2 gap-4">
        <div class="bg-blue-200">tr</div>
        <div class="bg-blue-300">an</div>
        <div class="bg-blue-400 col-span-2 row-span-2">ki</div>
        <div class="bg-gradient-to-r from-blue-500 via-green-600 to-yellow-400">la</div>
        <div class="bg-blue-600">la</div>
        <div class="bg-blue-700">la</div>
    </div>
</div>-->
</x-app-layout>