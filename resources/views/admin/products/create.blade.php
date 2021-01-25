@extends('adminlte::page')

@section('title', '3JM Administrative')

@section('content_header')
    <h1>Ingresar nuevo item</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {{-- laravel collective --}}
            {!! Form::open(['route' => 'admin.products.store']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Codigo') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el codigo del item']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('descripcion', 'Descripcion') !!}
                    {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripcion']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('cantidad', 'Cantidad') !!}
                    {!! Form::text('cantidad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cantidad']) !!}
                </div>

                <div class="form-group"> {{-- slug --}}
                    {!! Form::label('cantidad', 'Cantidad') !!}
                    {!! Form::text('cantidad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cantidad']) !!}
                </div>

                {!! Form::submit('Agregar Item', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop