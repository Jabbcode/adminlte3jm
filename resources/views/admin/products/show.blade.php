@extends('adminlte::page')

@section('title', '3JM Administrative')

@section('content_header')
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-1">
                <a class="btn btn-primary" href="{{ route('admin.products.index') }}">Regresar</a>
            </div>
            <div class="col-md-9">
                <h1 class="fw-bold">{{ $product->descripcion}}</h1>
            </div>
            <div class="col-md-2">
                <a class="btn btn-primary" href="{{ route('admin.products.edit', $product) }}">Editar</a>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                    <div class="form-group"> {{-- slug --}}
                        <label class="form-label">Slug</label>
                        <div class="form-control">{{$product->slug}}</div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <label class="form-label">Codigo</label>
                                    <div class="form-control">{{$product->codigo}}</div>
                                </div>
                                
                                <div class="col-md-4">
                                    <label class="form-label">Descripcion</label>
                                    <div class="form-control">{{$product->descripcion}}</div>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Categoria</label>
                                    <div class="form-control">{{$nombreCategoria}}</div>
                                </div>
                            </div>

                            <div class="row align-items-center"> 
                                <div class="col-md-4">
                                    <label class="form-label">Unidad de medida</label>
                                    <div class="form-control">{{$nombreUnidad}}</div>
                                </div>
        
                                <div class="col-md-4">
                                    <label class="form-label">Inventario Inicial</label>
                                    <div class="form-control">{{$product->inventario_inicial}}</div>
                                </div>
        
                                <div class="col-md-4">
                                    <label class="form-label">Inventario Final</label>
                                    <div class="form-control">{{$product->inventario_final}}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <label class="form-label">Peso unitario</label>
                                    <div class="form-control">{{$product->peso_unitario}}</div>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Proveedor</label>
                                    <div class="form-control">{{$nombreProveedor}}</div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Fecha de ingreso</label>
                                    <div class="form-control">{{$product->fecha_ingreso}}</div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <label class="form-label">Fecha de salida</label>
                                    <div class="form-control">{{$product->fecha_salida}}</div>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Precio Unitario</label>
                                    <div class="form-control">{{$product->precio_unit}}</div>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Precio del flete</label>
                                    <div class="form-control">{{$product->flete_precio}}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <label class="form-label">Ubicacion</label>
                                    <div class="form-control">{{$product->ubicacion}}</div>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Otra ubicacion</label>
                                    <div class="form-control">{{$product->ubicacion_geografica}}</div>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">IPC</label>
                                    <div class="form-control">{{$product->ipc}}</div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <label class="form-label">Stock Minimo</label>
                                    <div class="form-control">{{$product->stock_min}}</div>
                                </div>
                                
                                <div class="col-md-4">
                                    <label class="form-label">Stock Maximo</label>
                                    <div class="form-control">{{$product->stock_max}}</div>
                                </div>  
                                
                                <div class="col-md-4">
                                    <label class="form-label">Monto en Bs.S</label>
                                    <div class="form-control">{{$product->monto}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

