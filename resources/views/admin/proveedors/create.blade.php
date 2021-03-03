@extends('adminlte::page')

@section('title', '3JM Administrative')

@section('content_header')
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-1">
                <a class="btn btn-primary" href="{{ route('admin.proveedors.index') }}">Regresar</a>
            </div>
            <div class="col-md-11">
                <h1 class="fw-bold">Ingresar nuevo proveedor</h1>
            </div>
        </div>
    </div>
@stop


@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'admin.proveedors.store']) !!}
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('rif', 'Rif') !!}
                                        {!! Form::text('rif', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Rif del proveedor']) !!}
                
                                        @error('rif')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group"> 
                                        {!! Form::label('clasificacion_id', 'Clasificacion') !!}
                                        {!! Form::select('clasificacion_id', $clasificacion, null, ['class' => 'form-control', 'placeholder' => 'Ingrese la clasificacion']) !!}
                                    
                                        @error('clasificacion_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> 

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('nombre', 'Nombre') !!}
                                        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) !!}

                                        @error('nombre')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror 
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center"> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('direccion', 'Direccion') !!}
                                        {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la direccion']) !!}

                                        @error('direccion')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('persona_contacto', 'Persona de contacto') !!}
                                        {!! Form::text('persona_contacto', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la persona de contacto']) !!}
                                    
                                        @error('persona_contacto')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('tlf_oficina', 'Tlf de oficina') !!}
                                        {!! Form::text('tlf_oficina', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el telefono de la oficina']) !!}
                                    
                                        @error('tlf_oficina')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center"> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('tlf_movil', 'Tlf ceular') !!}
                                        {!! Form::text('tlf_movil', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el telefono celular']) !!}

                                        @error('tlf_movil')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('email', 'Correo electronico') !!}
                                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el correo Electronico']) !!}

                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('lugar', 'Lugar') !!}
                                        {!! Form::text('lugar', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el lugar']) !!}

                                        @error('lugar')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('observaciones', 'Observaciones') !!}
                                        {!! Form::text('observaciones', null, ['class' => 'form-control', 'placeholder' => 'Ingrese alguna observacion']) !!}

                                        @error('observaciones')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop