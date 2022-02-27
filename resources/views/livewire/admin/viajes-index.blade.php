<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el destino del viaje">
    </div>

    @if($viajes->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Destino</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($viajes as $v)
                        <tr>
                            <td>{{$v->id}}</td>
                            <td>{{$v->destino}}</td>
                            <td width="10px"><a class="btn btn-primary btn-sm" href="{{route('admin.viajes.edit', $v)}}">Editar</a></td>
                            <td width="10px">
                                <form action="{{route('admin.viajes.destroy', $v)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$viajes->links()}}
        </div>
    @else
        <div class="card-body">
        <strong>No hay ningun registro</strong>
        </div>
    @endif
@livewireStyles
@livewireScripts
</div>
