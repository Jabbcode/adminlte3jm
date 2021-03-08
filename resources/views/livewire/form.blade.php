<div>
    <div class="col-md-2">
        <button class="btn text-white btn-info btn-sm" wire:click.prevent="add({{$i}})">Añadir</button>
        <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$i}})">Remover</button>
    </div>
    {!! Form::open(['route' => 'admin.compras.store']) !!}
            <div class="add-input">
                <table class="table table-striped">
                    <thead>
                        <tr style="font-size: 14px; font-weight: 600">
                            <td>Renglon</td>
                            <td>Codigo 3JM</td>
                            <td>Codigo</td>
                            <td>Descripcion</td>
                            <td>U/M</td>
                            <td>Empaque</td>
                            <td>Bulto</td>
                            <td>Cantidad</td>
                            <td>Peso Unitario</td>
                            <td>Peso</td>
                            <td>Precio Unitario</td>
                            <td>Monto</td>
                            <td colspan="2"></td>
                        </tr>
                    </thead>
                    <tbody>
                <tr>
                    <td>
                         <div class="form-group">
                            {!! Form::text('renglon.0', $i, null, ['class' => 'form-control', 'wire:model' => "renglon.0"]) !!}
        
                            @error('renglon.0')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </td>
                  <td>
                        <div class="form-group">
                            {!! Form::text('codigo_3jm.0', null, ['class' => 'form-control', 'wire:model' => "codigo_3jm.0"]) !!}
        
                            @error('codigo_3jm.0')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </td>
                      <td>
                        <div class="form-group">
                            {!! Form::text('codigo.0', null, ['class' => 'form-control', 'wire:model' => "codigo.0"]) !!}
        
                            @error('codigo.0')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </td>
                    {{--<td>
                        <div class="form-group">
                            {!! Form::select('descripcion.0', $descripcion, null, ['class' => 'form-control', 'wire:model' => "descripcion.0"]) !!}
        
                            @error('descripcion.0')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </td>--}}
                    <td>
                        <div class="form-group">
                            {!! Form::text('descripcion.0', null, ['class' => 'form-control', 'wire:model' => "descripcion.0"]) !!}
        
                            @error('descripcion.0')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            {!! Form::text('empaque.0', null, ['class' => 'form-control', 'wire:model' => "empaque.0"]) !!}
        
                            @error('empaque.0')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            {!! Form::text('bulto.0', null, ['class' => 'form-control', 'wire:model' => "bulto.0"]) !!}
        
                            @error('bulto.0')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            {!! Form::text('cantidad.0', null, ['class' => 'form-control', 'wire:model' => "cantidad.0"]) !!}
        
                            @error('cantidad.0')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            {!! Form::text('peso_unit.0', null, ['class' => 'form-control', 'wire:model' => "peso_unit.0"]) !!}
        
                            @error('peso_unit.0')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            {!! Form::text('peso_total.0', null, ['class' => 'form-control', 'wire:model' => "peso_total.0"]) !!}
        
                            @error('peso_total.0')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            {!! Form::text('precio_unit.0', null, ['class' => 'form-control', 'wire:model' => "precio_unit.0"]) !!}
        
                            @error('precio_unit.0')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            {!! Form::text('monto.0', null, ['class' => 'form-control', 'wire:model' => "monto.0"]) !!}
        
                            @error('monto.0')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </td> --}}
                </tr>
            
            </div>

            @foreach($inputs as $key => $value)
                <div class="add-input">
                    <tr>
                    <div class="row align-items-center">
                        <td>
                            <div class="form-group">
                                {!! Form::text('renglon.{{ $value }}', $i, null, ['class' => 'form-control', 'wire:model' => "renglon.{{ $value }}"]) !!}
            
                                @error('renglon.{{ $value }}')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                {!! Form::text('codigo_3jm.{{ $value }}', null, ['class' => 'form-control', 'wire:model' => "codigo_3jm.{{ $value }}"]) !!}
            
                                @error('codigo_3jm.{{ $value }}')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                {!! Form::text('codigo.{{ $value }}', null, ['class' => 'form-control', 'wire:model' => "codigo.{{ $value }}"]) !!}
            
                                @error('codigo.{{ $value }}')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                {!! Form::text('descripcion.{{ $value }}', null, ['class' => 'form-control', 'wire:model' => "descripcion.{{ $value }}"]) !!}

                                @error('descripcion.{{ $value }}')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                {!! Form::text('descripcion.{{ $value }}', null, ['class' => 'form-control', 'wire:model' => "descripcion.{{ $value }}"]) !!}
            
                                @error('descripcion.{{ $value }}')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                {!! Form::text('empaque.{{ $value }}', null, ['class' => 'form-control', 'wire:model' => "empaque.{{ $value }}"]) !!}
            
                                @error('empaque.{{ $value }}')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                {!! Form::text('bulto.{{ $value }}', null, ['class' => 'form-control', 'wire:model' => "bulto.{{ $value }}"]) !!}
            
                                @error('bulto.{{ $value }}')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                {!! Form::text('cantidad.{{ $value }}', null, ['class' => 'form-control', 'wire:model' => "cantidad.{{ $value }}"]) !!}
            
                                @error('cantidad.{{ $value }}')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                {!! Form::text('peso_unit.{{ $value }}', null, ['class' => 'form-control', 'wire:model' => "peso_unit.{{ $value }}"]) !!}
            
                                @error('peso_unit.{{ $value }}')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                {!! Form::text('peso_total.{{ $value }}', null, ['class' => 'form-control', 'wire:model' => "peso_total.{{ $value }}"]) !!}
            
                                @error('peso_total.{{ $value }}')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                {!! Form::text('precio_unit.{{ $value }}', null, ['class' => 'form-control', 'wire:model' => "precio_unit.{{ $value }}"]) !!}
            
                                @error('precio_unit.{{ $value }}')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                {!! Form::text('monto.{{ $value }}', null, ['class' => 'form-control', 'wire:model' => "monto.{{ $value }}"]) !!}
            
                                @error('monto.{{ $value }}')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>
{{--                         <td>
                            <div class="col-md-4">
                                <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">Remover</button>
                            </div>
                        </td> --}}

                        <td>
                            <button class="btn btn-danger btn-sm" wire:click.prevent="cargar({{$id_producto}})">cargar</button>
                        </td>
                    </div>
                    </tr>
                </div>
            @endforeach
        </tbody>
    </table>
        <div class="row">
            <div class="col-md-12">
                <button type="button" wire:click.prevent="store()" class="btn btn-primary btn-sm">Generar orden de compra</button>
            </div>
        </div>
    {!! Form::close() !!}
</div>