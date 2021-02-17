@extends('adminlte::page')

@section('title', '3JM Administrative')

@section('content_header')
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-2">
                <a class="btn btn-primary" href="{{ route('admin.compras.index') }}">Regresar</a>
            </div>
            <div class="col-md-7">
                <h1 class="fw-bold">{{ $compra->orden}}</h1>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid">
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
                        @foreach ($compra as $c)
                            @foreach ($orden as $item)
                                @foreach ($productos as $producto)
                                <tr>
                                    @if ($item->producto_id == $producto->id)
                                        <td>{{ $c->renglon}}</td>
                                        <td>{{ $producto->codigo}}</td>
                                    @endif
                                </tr>
                                @endforeach
                            @endforeach
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

