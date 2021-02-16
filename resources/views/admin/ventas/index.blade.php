@extends('adminlte::page')

@section('title', '3JM Administrative')

@section('content_header')
    <h1>Lista de Notas de entrega</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{ route('admin.ventas.create') }}">Generar orden de venta</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td colspan="2"></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ventas as $venta)
                        <tr>
                            <td>{{-- {{$venta->}} --}}</td>
                            <td>{{-- {{$venta->}} --}}</td>
                            <td>{{-- {{$venta->}} --}}</td>
                            <td>{{-- {{$venta->}} --}}</td>
                            <td width="10px">
                                <a href="{{ route('admin.ventas.edit', $venta) }}"><i class="far fa-edit"></i></a>
                            </td>
                            <td width="10px">
                                <a href="{{ route('admin.ventas.update', $venta) }}"><i class="fas fa-eye"></i></a>
                            </td>
                            <td width="10px">
                                <a href="{{ route('admin.ventas.index', $venta) }}"><i class="fas fa-dollar-sign"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
