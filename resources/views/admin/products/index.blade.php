@extends('adminlte::page')

@section('title', '3JM Administrative')

@section('content_header')
    <h1>Lista de Items</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{ route('admin.products.create') }}">Agregar nuevo item</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Codigo</td>
                        <td>Categoria</td>
                        <td>Descripcion</td>
                        <td>Cantidad</td>
                        <td>Producto critico</td>
                        <td colspan="2"></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td>{{$producto->codigo}}</td>
                            <td>{{$producto->categoria_id}}</td>
                            <td>{{$producto->descripcion}}</td>
                            <td>{{$producto->cantidad}}</td>
                            <td>{{$producto->producto_critico}}</td>
                            <td width="10px">
                                <a href="{{ route('admin.products.edit', $producto) }}"><i class="far fa-edit"></i></a>
                            </td>
                            <td width="10px">
                                <a href="{{ route('admin.products.update', $producto) }}"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
