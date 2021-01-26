@extends('adminlte::page')

@section('title', '3JM Administrative')

@section('content_header')
    <h1>Ingresar nuevo item</h1>
    <a class="btn btn-primary" href="{{ route('admin.products.index') }}">Regresar</a>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {{-- laravel collective --}}
            {!! Form::open(['route' => 'admin.products.store']) !!}

                <div class="form-group"> {{-- slug --}}
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Slug', 'readonly']) !!}
                
                    @error('slug')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('codigo', 'Codigo') !!}
                    {!! Form::text('codigo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el codigo del item']) !!}

                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('descripcion', 'Descripcion') !!}
                    {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripcion']) !!}
                
                    @error('descripcion')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('inventario_inicial', 'Inventario Inicial') !!}
                    {!! Form::text('inventario_inicial', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el inventario Inicial']) !!}
                
                    @error('inventario_inicial')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('unid_medida', 'Unidad de medida') !!}
                    {!! Form::text('unid_medida', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la unidad de medida']) !!}
                
                    @error('unid_medida')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('peso_unitario', 'Peso unitario') !!}
                    {!! Form::text('peso_unitario', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el peso unitario']) !!}
                
                    @error('peso_unitario')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('cantidad', 'Cantidad') !!}
                    {!! Form::text('cantidad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cantidad']) !!}
                
                    @error('cantidad')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('peso_total', 'Peso total') !!}
                    {!! Form::text('peso_total', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el peso total']) !!}
                
                    @error('peso_total')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('ubicacion', 'Ubicacion') !!}
                    {!! Form::text('ubicacion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la ubicacion']) !!}
                
                    @error('ubicacion')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('ipc', 'IPC') !!}
                    {!! Form::text('ipc', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el IPC']) !!}
                
                    @error('ipc')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('stock_max', 'Stock Maximo') !!}
                    {!! Form::text('stock_max', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el stock maximo']) !!}
                
                    @error('stock_max')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('stock_min', 'Stock Minimo') !!}
                    {!! Form::text('stock_min', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el stock minimo']) !!}
                
                    @error('stock_min')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('ubicacion_geografica', 'Otra ubicacion') !!}
                    {!! Form::text('ubicacion_geografica', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la otra ubicacion']) !!}
                
                    @error('ubicacion_geografica')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('monto', 'Monto') !!}
                    {!! Form::text('monto', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el monto en dolares']) !!}
                
                    @error('monto')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('monto_dolar', 'Monto en dolares') !!}
                    {!! Form::text('monto_dolar', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el monto en dolares']) !!}
                
                    @error('monto_dolar')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                {!! Form::submit('Agregar Item', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop


@section('js')
    
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready( function() {
            $("#descripcion").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

@endsection