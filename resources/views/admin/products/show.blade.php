@extends('adminlte::page')

@section('title', '3JM Administrative')

@section('content_header')
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-1">
                <a class="btn btn-primary" href="{{ route('admin.products.index') }}">Regresar</a>
            </div>
            <div class="col-md-9">
                <h1 class="fw-bold">{{ $product->descripcion}}</h1>
            </div>
            <div class="col-md-2">
                <a class="btn btn-primary" href="{{ route('admin.products.edit', $product) }}">Editar</a>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'admin.products.store']) !!}

                    <div class="form-group"> {{-- slug --}}
                        {!! Form::label('slug', 'Slug') !!}
                        {!! Form::text('slug', null, ['class' => 'form-control', 'readonly']) !!}
                    
                        @error('slug')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('codigo', 'Codigo') !!}
                                {!! Form::text('codigo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el codigo del item']) !!}
        
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('descripcion', 'Descripcion') !!}
                                {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripcion']) !!}
                            
                                @error('descripcion')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('categoria_id', 'Categoria') !!}
                                {!! Form::select('categoria_id', ['x' => 'x'], null, ['class' => 'form-control', 'placeholder' => 'Selecione categoria']) !!}

                                @error('categoria_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center"> 
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('unid_medida', 'Unidad de medida') !!}
                                {!! Form::select('unid_medida', ['x' => 'x'],
                                    null, 
                                    ['class' => 'form-control', 'placeholder' => 'Seleecione unidad de medida']) !!}

                                @error('unid_medida')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('inventario_inicial', 'Inventario Inicial') !!}
                                {!! Form::text('inventario_inicial', null, ['class' => 'form-control', 'readonly']) !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('inventario_final', 'Inventario Final') !!}
                                {!! Form::text('inventario_final', null, ['class' => 'form-control', 'readonly']) !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('peso_unitario', 'Peso unitario') !!}
                                {!! Form::text('peso_unitario', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el peso unitario']) !!}
                            
                                @error('peso_unitario')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center"> 
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('proveedor', 'Proveedor') !!}
                                {!! Form::text('proveedor', null, ['class' => 'form-control', 'placeholder' => 'Selecione el proveedor']) !!}

                                @error('proveedor')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('fecha_ingreso', 'Fecha de ingreso') !!}
                                {!! Form::text('fecha_ingreso', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la fecha de ingreso']) !!}

                                @error('fecha_ingreso')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('fecha_salida', 'Fecha de salida') !!}
                                {!! Form::text('fecha_salida', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la fecha de ingreso']) !!}

                                @error('fecha_salida')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('precio_unit', 'Precio Unitario') !!}
                                {!! Form::text('precio_unit', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Precio Unitario']) !!}

                                @error('precio_unit')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('flete_precio', 'Precio del flete') !!}
                                {!! Form::text('flete_precio', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Precio del flete']) !!}

                                @error('flete_precio')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('ubicacion', 'Ubicacion') !!}
                                {!! Form::text('ubicacion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la ubicacion']) !!}
                            
                                @error('ubicacion')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('ipc', 'IPC') !!}
                                {!! Form::text('ipc', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el IPC']) !!}
                            
                                @error('ipc')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('stock_min', 'Stock Minimo') !!}
                                {!! Form::text('stock_min', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el stock minimo']) !!}
                            
                                @error('stock_min')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('stock_max', 'Stock Maximo') !!}
                                {!! Form::text('stock_max', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el stock maximo']) !!}
                            
                                @error('stock_max')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('ubicacion_geografica', 'Otra ubicacion') !!}
                                {!! Form::text('ubicacion_geografica', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la otra ubicacion']) !!}
                            
                                @error('ubicacion_geografica')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('monto', 'Monto en Bs.S') !!}
                                {!! Form::text('monto', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el monto en Bolivares']) !!}
                            
                                @error('monto')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        {!! Form::submit('Agregar Item', ['class' => 'btn btn-primary', 'wire:click' => 'store']) !!}
                    </div>
            
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

