@extends('adminlte::page')

@section('title', '3JM Administrative')

@section('content_header')
    <h1>Informacion del Item</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{ route('admin.products.index') }}">Regresar</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Codigo</td>
                        <td>Descripcion</td>
                        <td>Cantidad</td>
                        <td>Producto critico</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$product->codigo}}</td>
                        <td>{{$product->descripcion}}</td>
                        <td>{{$product->cantidad}}</td>
                        <td>{{$product->producto_critico}}</td>
                    </tr>
                </tbody>
            </table>

            <br>
            <br>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Inventario Inicial</td>
                        <td>Unidad medida</td>
                        <td>Peso total</td>
                        <td>ubicacion</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$product->inventario_inicial}}</td>
                        <td>{{$product->unid_medida}}</td>
                        <td>{{$product->peso_total}}</td>
                        <td>{{$product->ubicacion}}</td>
                    </tr>
                </tbody>
            </table>

            <br>
            <br>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>IPC</td>
                        <td>Stock max</td>
                        <td>Stock min</td>
                        <td>Cantidad a pedir</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$product->ipc}}</td>
                        <td>{{$product->stock_max}}</td>
                        <td>{{$product->stock_min}}</td>
                        <td>{{$product->cantidad_pedir}}</td>
                    </tr>
                </tbody>
            </table>

            <br>
            <br>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Ajuste inventario</td>
                        <td>Otra Ubicacion</td>
                        <td>Monto en Bolivares</td>
                        <td>Monto en Dolares</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$product->ajuste_inventario}}</td>
                        <td>{{$product->ubicacion_geografica}}</td>
                        <td>{{$product->monto}}</td>
                        <td>{{$product->monto_dolar}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

