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
                            <td class="border border-gray-400 px-4 py-2 text-lg">{{$c->nombre}}
                            </td>
                            <td class="border border-gray-400 px-4 py-2 text-lg">
                                    @foreach($c->variando as $v)
                                        <p>{{$v}}</p>
                                    @endforeach
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
</div>

</x-app-layout>