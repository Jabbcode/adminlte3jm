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
                {!! Form::model($product, ['route' => ['admin.products.update', $product], 'method' => 'put']) !!}

                    <div class="form-group"> {{-- slug --}}
                        {!! Form::label('slug', 'Slug') !!}
                        {!! Form::text('slug', null, ['class' => 'form-control', 'readonly']) !!}
                    </div>

                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('codigo', 'Codigo') !!}
                                {!! Form::text('codigo', null, ['class' => 'form-control', 'readonly']) !!}
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('descripcion', 'Descripcion') !!}
                                {!! Form::text('descripcion', null, ['class' => 'form-control', 'readonly']) !!}
                            </div>
                        </div>
                    
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('peso_unitario', 'Peso unitario') !!}
                                {!! Form::text('peso_unitario', null, ['class' => 'form-control', 'readonly']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center">

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('inventario_inicial', 'Inventario Inicial') !!}
                                {!! Form::text('inventario_inicial', null, ['class' => 'form-control', 'readonly']) !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('unid_medida', 'Unidad de medida') !!}
                                {!! Form::text('unid_medida', null, ['class' => 'form-control','readonly']) !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('cantidad', 'Entrada') !!}
                                {!! Form::text('cantidad', null, ['class' => 'form-control', 'readonly']) !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('peso_total', 'Peso total') !!}
                                {!! Form::text('peso_total', null, ['class' => 'form-control', 'readonly']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('ubicacion', 'Ubicacion') !!}
                                {!! Form::text('ubicacion', null, ['class' => 'form-control', 'readonly']) !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('stock_min', 'Stock Minimo') !!}
                                {!! Form::text('stock_min', null, ['class' => 'form-control', 'readonly']) !!}
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('stock_max', 'Stock Maximo') !!}
                                {!! Form::text('stock_max', null, ['class' => 'form-control', 'readonly']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('ipc', 'IPC') !!}
                                {!! Form::text('ipc', null, ['class' => 'form-control', 'readonly']) !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('ubicacion_geografica', 'Otra ubicacion') !!}
                                {!! Form::text('ubicacion_geografica', null, ['class' => 'form-control', 'readonly']) !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('monto', 'Monto en Bs.S') !!}
                                {!! Form::text('monto', null, ['class' => 'form-control', 'readonly']) !!}
                            </div>
                        </div>
                    </div>
                    
                        {{--<div class="form-group">
                            {!! Form::label('monto_dolar', 'Monto en $') !!}
                            {!! Form::text('monto_dolar', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el monto en dolares']) !!}
                        
                            @error('monto_dolar')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> --}}
            
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

