@extends('adminlte::page')

@section('title', '3JM Administrative')

@section('content_header') 
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-1">
                <a class="btn btn-primary" href="{{ route('admin.products.index') }}">Regresar</a>
            </div>
            <div class="col-md-11">
                <h1 class="fw-bold">Editar item</h1>
            </div>

        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                {!! Form::model($product, ['route' => ['admin.products.update', $product], 'method' => 'put']) !!}

                    <div class="form-group"> {{-- slug --}}
                        {!! Form::label('slug', 'Slug') !!}
                        {!! Form::text('slug', null, ['class' => 'form-control', 'readonly']) !!}
                    
                        @error('slug')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="card">
                        <div class="card-body">
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
                                        {!! Form::label('id_categoria', 'Categoria') !!}
                                        {!! Form::select('id_categoria', $categorias, null, ['class' => 'form-control', 'readonly']) !!}

                                        @error('categoria_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('id_unidades', 'Unidad de medida') !!}
                                        {!! Form::select('id_unidades', $unidades, null, ['class' => 'form-control', 'readonly']) !!}
        
                                        @error('id_unidades')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('cantidad', 'Disponible') !!}
                                        {!! Form::text('cantidad', null, ['class' => 'form-control']) !!}
                                    
                                        @error('cantidad')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('peso_unitario', 'Peso unitario') !!}
                                        {!! Form::text('peso_unitario', null, ['class' => 'form-control', 'readonly']) !!}
                                    
                                        @error('peso_unitario')
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
                                        {!! Form::label('id_proveedor', 'Proveedor') !!}
                                        {!! Form::select('id_proveedor', $proveedores, null, ['class' => 'form-control']) !!}

                                        @error('id_proveedor')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('fecha_ingreso', 'Fecha de ingreso') !!}
                                        {!! Form::date('fecha_ingreso', $product->fecha_ingreso , ['class' => 'form-control', 'placeholder' => 'Ingrese la fecha de ingreso']) !!}

                                        @error('fecha_ingreso')
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
                        </div>
                    </div>

                    
                    <div class="card">
                        <div class="card-body">
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
                        </div>
                    </div>
                        {{--<div class="form-group">
                            {!! Form::label('inventario_inicial', 'Inventario Inicial') !!}
                            {!! Form::text('inventario_inicial', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el inventario Inicial']) !!}
                        
                            @error('inventario_inicial')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>--}}
                    
                    <div class="mt-4">
                        {!! Form::submit('Actualizar Item', ['class' => 'btn btn-primary']) !!}
                    </div>
            
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready( function() {
            $("#descripcion").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

@endsection