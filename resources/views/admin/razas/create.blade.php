@extends('adminlte::page')

@section('title', 'Pets Travel')

@section('content_header')
    <h1>Añadir nueva raza</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.razas.store']) !!}

                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la raza']) !!}

                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la raza', 'readonly']) !!}

                    @error('slug')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <p class="font-weight-bold">Tiene variantes?</p>
                    <label>
                        {!! Form::radio('vari_ante', 1) !!}
                        No
                    </label>
                    <label>
                        {!! Form::radio('vari_ante', 2, true) !!}
                        Si
                    </label>

                    @error('vari_ante')
                        <br>
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                    <input type="button" class="ml-3" id="btnAddMore" value="New variant">
                </div>

                <div id="contenedor"></div><!---where my variant_form is displayed-->

                {!! Form::submit('Añadir raza', ['class' => 'btn btn-primary mt-2']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@stop

@section('js')

    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
    $(document).ready(function() {
    $("input[type=radio]").click(function(event){
        var valor = $(event.target).val();
        if(valor == 1){
            $("#btnAddMore").hide();
            $("#contenedor").hide();
        } else {
            $("#btnAddMore").show();
            $("#contenedor").show();
        }
        });
    });

    $(document).ready( function() {
    $("#nombre").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
    });
    });

    $(document).ready(function() {
      var plantilla = "<form action='create.blade.php'>" +//here it might be the route
        "  Variant name:<br>" +
        "  <input type='text' name='var_name'>" +
        "  <br>" +
        "  Length:<br>" +
        "  <input type='text' name='var_length' >" +
        "  <br>" +
        "  Color:<br>" +
        "  <input type='text' name='var_color' >" +
        "  <input type='submit' value='Add variant' class='ml-3'>" +
        "  <br>" +
        "</form>";

      var contenedor = $("#contenedor");

      var btnAddMore = $("#btnAddMore");

      btnAddMore.click(function() {

        contenedor.append(plantilla);

      });
    });

    </script>

@endsection