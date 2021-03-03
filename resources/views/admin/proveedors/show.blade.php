@extends('adminlte::page')

@section('title', '3JM Administrative')

@section('content_header')
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-1">
                <a class="btn btn-primary" href="{{ route('admin.proveedors.index') }}">Regresar</a>
            </div>
            <div class="col-md-9">
                <h1 class="fw-bold">{{ $proveedor->nombre}}</h1>
            </div>
            <div class="col-md-2">
                <a class="btn btn-primary" href="{{ route('admin.proveedors.edit', $proveedor) }}">Editar</a>
            </div>
        </div>
    </div>
@stop


@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Rif</label>
                                        <div class="form-control">{{$proveedor->rif}}</div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Clasificacion</label>
                                        <div class="form-control">{{$proveedor->clasificacion_id}}</div>
                                    </div>
                                </div> 

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Nombre</label>
                                        <div class="form-control">{{$proveedor->nombre}}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center"> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Direccion</label>
                                        <div class="form-control">{{$proveedor->direccion}}</div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Persona de contacto</label>
                                        <div class="form-control">{{$proveedor->persona_contacto}}</div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Telefono de oficina</label>
                                        <div class="form-control">{{$proveedor->tlf_oficina}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center"> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Telefono movil</label>
                                        <div class="form-control">{{$proveedor->tlf_movil}}</div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Correo electronico</label>
                                        <div class="form-control">{{$proveedor->email}}</div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Lugar</label>
                                        <div class="form-control">{{$proveedor->lugar}}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Observaciones</label>
                                        <div class="form-control">{{$proveedor->observaciones}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@stop