@extends('adminlte::page')

@section('title', '3JM Administrative')

@section('content_header')
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-2">
                <a class="btn btn-primary" href="{{ route('admin.compras.index') }}">Regresar</a>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row align-items-center text-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2>Grupo 3JM de Venezuela, C.A.</h2>
                        <h3>R.I.F. N°: J-40053258-2</h3>
                        <p>Dirección Fiscal: Av. Guarapiche con Calle Chicanag C.C RIO PLAZA Nivel PB Local 3 Zona Unare I, Puerto Ordaz Ciudad Guayana Bolivar</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h1>Orden de Compra</h1>
                        <h2>{{ $compra->orden}}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p>Fecha: {{ $compra->fecha_salida }}</p>
                        @foreach ($proveedores as $proveedor)
                            @if ($compra->id_proveedor == $proveedor->id)
                                <h2>Proveedor: {{ $proveedor->nombre}}</h2>
                                <p>Rif: {{ $proveedor->rif }}</p>
                                <p>Direccion: {{ $proveedor->direccion }}</p>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
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
                        @foreach ($orden as $o)
                            <tr>
                                <td>{{ $o->renglon}}</td>
                                @foreach ($productos as $producto)
                                    @if ($o->producto_id == $producto->id)
                                        <td>{{ $producto->codigo}}</td> 
                                        <td>{{ $i++}}</td>
                                        <td>{{ $producto->descripcion}}</td> 
                                        @foreach ($unidades as $unidad)
                                            @if ($producto->id_unidades == $unidad->id)
                                                <td>{{ $unidad->nombre}}</td> 
                                            @endif
                                        @endforeach
                                        <td>{{ $o->empaque}}</td>
                                        <td>{{ $o->bulto}}</td>
                                        <td>{{ $o->cantidad}}</td> 
                                        <td>{{ $producto->peso_unitario}}</td>
                                        <td>{{ $o->peso_total}}</td>
                                        <td>{{ $producto->precio_unit}}</td>
                                        <td>{{ $o->monto}}</td>
                                    @endif
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

