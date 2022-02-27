@extends('adminlte::page')

@section('title', 'Pets Travel')

@section('content_header')
    <h1>Variantes index</h1>

@stop

@section('content')
    <p>cachorritos bbs</p>
        <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.razas.cargar']) !!}

            	<div class="form-group">
                    {!! Form::label('raza_id', 'Raza') !!}
                    {!! Form::select('raza_id', $razas, null, ['class' => 'form-control', 'placeholder' => 'Elija la raza de perro']) !!}

                    @error('raza_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variante']) !!}

                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la variante', 'readonly']) !!}

                    @error('slug')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                {!! Form::submit('Añadir variante', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')

    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $("#nombre").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
            });
        });
    </script>


@endsection