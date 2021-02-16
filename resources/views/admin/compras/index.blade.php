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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td colspan="2"></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($compras as $compra)
                        <tr>
                            <td>{{-- {{$compra->}} --}}</td>
                            <td>{{-- {{$compra->}} --}}</td>
                            <td>{{-- {{$compra->}} --}}</td>
                            <td>{{-- {{$compra->}} --}}</td>
                            <td width="10px">
                                <a href="{{ route('admin.clients.edit', $compra) }}"><i class="far fa-edit"></i></a>
                            </td>
                            <td width="10px">
                                <a href="{{ route('admin.clients.update', $compra) }}"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
