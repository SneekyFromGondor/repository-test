@extends('adminlte::page')

@section('title', 'Pets Travel')

@section('content_header')
    <h1>Añadir viaje</h1>
@stop

@section('content')
    <p>perrito bebe</p>
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.viajes.store', 'autocomplete' => 'off', 'files' => true]) !!}

                @include('admin.viajes.partials.form')

                {!! Form::submit('Añadir viaje', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }
        .image-wrapper img{
            position: absolute;
            width: 100%;
            height: 100%;
        }
    </style>
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $("#destino").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
            });
        });

        //cambiar imagen

        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }
    </script>
@endsection
