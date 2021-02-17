@extends('adminlte::page')

@section('title', '3JM Administrative')

@section('content_header')
    <h1>Lista de Ordenes de compra</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{ route('admin.compras.create') }}">Generar orden de compra</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Proveedor</td>
                        <td>Numero de orden</td>
                        <td>Fecha de salida</td>
                        <td></td>
                        <td></td>
                        <td colspan="2"></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($compras as $compra)
                        <tr>
                            @foreach ($proveedores as $proveedor)
                                @if ($compra->id_proveedor == $proveedor->id)
                                    <td>{{$proveedor->nombre}}</td>
                                @endif
                            @endforeach
                            <td>{{$compra->orden}}</td>
                            <td>{{$compra->fecha_salida}}</td>
                            <td></td>
                            <td width="10px">
                                <a href="{{ route('admin.compras.update', $compra) }}"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
