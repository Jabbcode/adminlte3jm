@extends('adminlte::page')

@section('title', '3JM Administrative')

@section('content_header')
    <h1>Lista de clientes</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{ route('admin.clients.create') }}">Agregar nuevo Cliente</a>
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
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{-- {{$cliente->}} --}}</td>
                            <td>{{-- {{$cliente->}} --}}</td>
                            <td>{{-- {{$cliente->}} --}}</td>
                            <td>{{-- {{$cliente->}} --}}</td>
                            <td width="10px">
                                <a href="{{ route('admin.clients.edit', $cliente) }}"><i class="far fa-edit"></i></a>
                            </td>
                            <td width="10px">
                                <a href="{{ route('admin.clients.update', $cliente) }}"><i class="fas fa-eye"></i></a>
                            </td>
                            <td width="10px">
                                <a href="{{ route('admin.clients.index', $cliente) }}"><i class="fas fa-wallet"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
