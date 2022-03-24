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
                        {!! Form::radio('var_stat', 1) !!}
                        No
                    </label>
                    <label>
                        {!! Form::radio('var_stat', 2, true) !!}
                        Si
                    </label>

                    @error('var_stat')
                        <br>
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                    <input type="button" class="btn btn-sm btn-success ml-3 mb-1" id="btnAddMore" value="Añadir variante">
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
      var tr = 0;
      var plantilla =
        "  Nombre de la variante:   <br> " +
        "  <input class='form-control' type='text' name='var_name[]'>" +
        "  <br>" +
        "  Tamaño:<br>" +
        "  <input class='form-control' type='number' name='var_tam[]' >" +
        "  <br>" +
        "  Color:<br>" +
        "  <input class='form-control' type='text' name='var_color[]' >" +
        "  <small>---------------</small><br>";

      var contenedor = $("#contenedor");

      var btnAddMore = $("#btnAddMore");

      btnAddMore.click(function() {

        contenedor.append(plantilla);

      });
    });

    </script>

@endsection