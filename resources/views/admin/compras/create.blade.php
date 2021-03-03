@extends('adminlte::page')

@section('title', '3JM Administrative')

@section('content_header')
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-1">
                <a class="btn btn-primary" href="{{ route('admin.compras.index') }}">Regresar</a>
            </div>
            <div class="col-md-11">
                <h1 class="fw-bold">Orden de compra nro - {{$orden->orden}}</h1>
            </div>
        </div>
    </div>
@stop


@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                {{-- {!! Form::open(['route' => 'admin.compras.store']) !!}
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('id_proveedor', 'Proveedor') !!}
                                        {!! Form::select('id_proveedor', $proveedores, null, ['class' => 'form-control', 'placeholder' => 'Ingrese el proveedor']) !!}
                
                                        @error('id_proveedor')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('fecha_salida', 'Fecha') !!}
                                        {!! Form::text('fecha_salida', $fecha, ['class' => 'form-control', 'readonly']) !!}
                
                                        @error('fecha_salida')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>   
                            
                            
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td>Renglon</td>
                                        <td>Codigo 3JM</td>
                                        <td>Codigo</td>
                                        <td>Descripcion</td>
                                        <td>U/M</td>
                                        <td>Empaque</td>
                                        <td>Bulto</td>
                                        <td>Cantidad</td>
                                        <td>Peso Unitario</td>
                                        <td>Peso</td>
                                        <td>Precio Unitario</td>
                                        <td>Monto</td>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                        </tr> 
                                    </tbody>
                                </table>
                              
                        

                                <div class="col-md-1 mt-3">
                                    {!! Form::submit('Generar orden', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
            {!! Form::close() !!} --}}
               
               @livewire('form')
            </div>
        </div>
    </div>
    @livewireScripts
@stop