<div>
    <table class="table table-striped">
        <thead>
            <tr>
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
                <td>
                    <button wire:click"crearLinea" class="btn btn-primary">
                        <i class="fas fa-plus-circle"></i>
                    </button>
                </td>
            </tr>
        </thead>
        <tbody>
            <ul>
                <li>
                    <tr>
                        <td>
                            <div class="form-group">
                                {!! Form::text('renglon', null, ['class' => 'form-control']) !!}
        
                                    @error('renglon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                        </td>  
                        <td>
                            <div class="form-group">
                                {!! Form::text('codigo_3jm', null, ['class' => 'form-control']) !!}
        
                                @error('codigo_3jm')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                {!! Form::text('codigo', null, ['class' => 'form-control']) !!}
        
                                @error('codigo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
        
                                @error('descripcion')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                {!! Form::text('id_unidades', null, ['class' => 'form-control']) !!}
        
                                @error('id_unidades')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                {!! Form::text('empaque', null, ['class' => 'form-control']) !!}
        
                                @error('empaque')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                {!! Form::text('bulto', null, ['class' => 'form-control']) !!}
        
                                @error('bulto')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                {!! Form::text('cantidad', null, ['class' => 'form-control']) !!}
        
                                @error('cantidad')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                {!! Form::text('peso_unit', null, ['class' => 'form-control']) !!}
        
                                @error('peso_unit')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                {!! Form::text('peso_total', null, ['class' => 'form-control']) !!}
        
                                @error('peso_total')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>    
                        <td>
                            <div class="form-group">
                                {!! Form::text('precio_unit', null, ['class' => 'form-control']) !!}
        
                                @error('precio_unit')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>  
                        <td>
                            <div class="form-group">
                                {!! Form::text('monto', null, ['class' => 'form-control']) !!}
        
                                @error('monto')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>  
                    </tr>
                </li>
            </ul>
        </tbody>
    </table>
</div>