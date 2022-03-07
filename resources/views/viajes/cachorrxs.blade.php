<x-app-layout>
<div class="container">
            <table class="table w-full border-separate">
                <thead>
                    <tr>
                        <th class="border border-gray-400 px-4 py-2 text-gray-800">Nombre</th>
                        <th class="border border-gray-400 px-4 py-2 text-gray-800">Variante</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cachorrxs as $c)
                        <tr>
                            <td class="border border-gray-400 px-4 py-2 text-lg text-center text-red-700 hover:text-blue-700">{{$c->nombre}}
                            </td>
                            <td class="border border-gray-400 px-4 py-2 text-lg">
                                    @foreach($c->variando as $v)
                                        <p class="text-center text-green-500 hover:text-opacity-75">{{$v}}</p>
                                    @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
</div>

<!---resposive: sm: grid-cols-1 md:grid-cols-2 lg:grid-cols-4 / col-start-->
<div class="container"><!--gap-x-4 o gap-y-4 para filas o cols / grid-cols-4 (4 columnas)-->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 grid-rows-2 gap-4">
        <div class="bg-blue-200">tr</div>
        <div class="bg-blue-300">an</div>
        <div class="bg-blue-400 col-span-2 row-span-2">ki</div>
        <div class="bg-gradient-to-r from-blue-500 via-green-600 to-yellow-400">la</div>
        <div class="bg-blue-600">la</div>
        <div class="bg-blue-700">la</div>
    </div>
</div>

</x-app-layout>