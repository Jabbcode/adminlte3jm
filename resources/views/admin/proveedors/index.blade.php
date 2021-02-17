@extends('adminlte::page')

@section('title', '3JM Administrative')

@section('content_header')
    <h1>Lista de Proveedores</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{ route('admin.proveedors.create') }}">Agregar nuevo Proveedor</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Rif</td>
                        <td>Nombre</td>
                        <td>Telefono</td>
                        <td>Correo Electronico</td>
                        <td colspan="3"></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proveedores as $proveedor)
                        <tr>
                            <td>{{$proveedor->rif}}</td>
                            <td>{{$proveedor->nombre}}</td>
                            <td>{{$proveedor->tlf_oficina}}</td>
                            <td>{{$proveedor->email}}</td>
                            <td width="10px">
                                <a href="{{ route('admin.proveedors.edit', $proveedor) }}"><i class="far fa-edit"></i></a>
                            </td>
                            <td width="10px">
                                <a href="{{ route('admin.proveedors.update', $proveedor) }}"><i class="fas fa-eye"></i></a>
                            </td>
                            <td width="10px">
                                <a href="{{ route('admin.compras.create', $proveedor) }}"><i class="fas fa-shopping-cart"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop