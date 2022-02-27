@extends('adminlte::page')

@section('title', 'Pets Travel')

@section('content_header')
    <a class="btn btn-success btn-sm float-right" href="{{route('admin.viajes.create')}}">Añadir viaje</a>
    <h1>Listado de viajes</h1>
@stop

@section('content')
    @if(session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
    @endif
    @livewire('admin.viajes-index')
@stop

