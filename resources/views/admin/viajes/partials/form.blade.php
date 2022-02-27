                <div class="form-group">
                    {!! Form::label('destino', 'Destino') !!}
                    {!! Form::text('destino', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el destino del viaje']) !!}

                    @error('destino')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del viaje', 'readonly']) !!}

                    @error('slug')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('raza_id', 'Raza') !!}
                    {!! Form::select('raza_id', $razas, null, ['class' => 'form-control', 'placeholder' => 'Elija la raza de perro']) !!}

                    @error('raza_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('cantidad', 'Cantidad de perros') !!}
                    {!! Form::number('cantidad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cantidad de perros']) !!}

                    @error('cantidad')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('user_id', 'Usuario') !!}
                    {!! Form::select('user_id', $users, null, ['class' => 'form-control', 'placeholder' => 'Elija el usuario cliente']) !!}

                    @error('user_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="image-wrapper">
                            @isset($viaje->image)
                                <img id="picture" src="{{Storage::url($viaje->image->url)}}">
                            @else
                                <img id="picture" src="">
                            @endisset
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            {!! Form::label('file', 'Imagen del viaje') !!}
                            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                            @error('file')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <p>Cargar la imagen que se va a mostrar en el viaje publicado..</p>
                    </div>
                </div>

                <div class="form-group">
                	<p class="font-weight-bold">Estado</p>
                	<label>
                		{!! Form::radio('status', 1, true) !!}
                		Pendiente
                	</label>
                	<label>
                		{!! Form::radio('status', 2) !!}
                		Confirmado
                	</label>
                	@error('status')
                        <br>
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                	{!! Form::label('descripcion', 'Descripcion del viaje') !!}
                	{!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripcion del viaje']) !!}

                	@error('descripcion')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
