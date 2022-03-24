@extends('adminlte::page')

@section('title', 'Pets Travel')

@section('content_header')
    <a class="btn btn-success float-right" href="{{route('admin.razas.create')}}">Añadir raza</a>
    <h1>Razas</h1>
@stop

@section('content')
    <p>perrito bebe</p>
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($razas as $r)
                        <tr>
                            <td>{{$r->id}}</td>
                            <td>{{$r->nombre}}</td>
                            <td width="10px">
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.razas.edit', $r)}}">Editar</a>
                            </td>
                            <td width="10px">
                                    <form action="{{route('admin.razas.destroy', $r)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn- btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

@stop
