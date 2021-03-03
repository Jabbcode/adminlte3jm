<?php

namespace App\Http\Livewire;

use App\Models\orden_compra;
use App\Models\Producto;
use App\Models\Proveedor;
use Livewire\Component;

class Form extends Component
{
    public $compras, $renglon, $codigo_3jm, $codigo, $descripcion, $empaque, 
    $bulto, $cantidad, $peso_unit, $peso_total, $precio_unit, $monto,
    $id_proveedor, $fecha_salida, $orden;
    public $updateMode = false;
    public $inputs = [];
    public $i = 1;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    public function render()
    {
        $this->compras = orden_compra::all();
        $codigos = Producto::orderBy('id', 'ASC')->pluck('codigo');
        $proveedores = Proveedor::orderBy('id', 'ASC')->pluck('nombre');
        $date = \Carbon\Carbon::now();
        $fecha = $date->format('d-m-Y');
        $orden = orden_compra::latest('id')->first();
        $orden->orden++;
        
        return view('livewire.form', compact('proveedores', 'codigos', 'fecha', 'orden'));
    }

    private function resetInputFields()
    {
        $this->id_proveedor = '';
        $this->codigo_3jm = '';
        $this->orden = '';
        $this->fecha_salida = '';
        $this->compras = ''; 
        $this->renglon = ''; 
        $this->codigo = ''; 
        $this->descripcion = ''; 
        $this->empaque = ''; 
        $this->bulto = ''; 
        $this->cantidad = ''; 
        $this->peso_unit = ''; 
        $this->peso_total = ''; 
        $this->precio_unit = ''; 
        $this->monto = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
                'id_proveedor.0' => 'required',
                'codigo_3jm.0' => 'required',
                'orden.0' => 'required',
                'fecha_salida.0' => 'required',
                'renglon.0' => 'required', 
                'codigo.0' => 'required', 
                'descripcion.0' => 'required', 
                'empaque.0' => 'required', 
                'bulto.0' => 'required', 
                'cantidad.0' => 'required', 
                'peso_unit.0' => 'required', 
                'peso_total.0' => 'required', 
                'precio_unit.0' => 'required', 
                'monto.0' => 'required',
                
                'id_proveedor.*' => 'required',
                'codigo_3jm.*' => 'required',
                'orden.*' => 'required',
                'fecha_salida.*' => 'required',
                'renglon.*' => 'required', 
                'codigo.*' => 'required', 
                'descripcion.*' => 'required', 
                'empaque.*' => 'required', 
                'bulto.*' => 'required', 
                'cantidad.*' => 'required', 
                'peso_unit.*' => 'required', 
                'peso_total.*' => 'required', 
                'precio_unit.*' => 'required', 
                'monto.*' => 'required',
            ],
            [
                'id_proveedor.0' => 'Este campo es requerido',
                'codigo_3jm.0' => 'Este campo es requerido',
                'orden.0' => 'Este campo es requerido',
                'fecha_salida.0' => 'Este campo es requerido',
                'renglon.0' => 'Este campo es requerido', 
                'codigo.0' => 'Este campo es requerido', 
                'descripcion.0' => 'Este campo es requerido', 
                'empaque.0' => 'Este campo es requerido', 
                'bulto.0' => 'Este campo es requerido', 
                'cantidad.0' => 'Este campo es requerido', 
                'peso_unit.0' => 'Este campo es requerido', 
                'peso_total.0' => 'Este campo es requerido', 
                'precio_unit.0' => 'Este campo es requerido', 
                'monto.0' => 'Este campo es requerido',


                'id_proveedor.*' => 'Este campo es requerido',
                'codigo_3jm.*' => 'Este campo es requerido',
                'orden.*' => 'Este campo es requerido',
                'fecha_salida.*' => 'Este campo es requerido',
                'renglon.*' => 'Este campo es requerido', 
                'codigo.*' => 'Este campo es requerido', 
                'descripcion.*' => 'Este campo es requerido', 
                'empaque.*' => 'Este campo es requerido', 
                'bulto.*' => 'Este campo es requerido', 
                'cantidad.*' => 'Este campo es requerido', 
                'peso_unit.*' => 'Este campo es requerido', 
                'peso_total.*' => 'Este campo es requerido', 
                'precio_unit.*' => 'Este campo es requerido', 
                'monto.*' => 'Este campo es requerido',
            ]
        );

        foreach ($this->codigo_3jm as $key => $value) {
            orden_compra::create(
                [
                    'id_proveedor' => $this->id_proveedor[$key],
                    'codigo_3jm' => $this->codigo_3jm[$key],
                    'orden' => $this->orden[$key], 
                    'fecha_salida' => $this->fecha_salida[$key]
                    'renglon' => $this->renglon[$key],
                    'codigo' => $this->codigo[$key],
                    'descripcion' => $this->descripcion[$key], 
                    'empaque' => $this->empaque[$key]
                    'bulto' => $this->bulto[$key],
                    'cantidad' => $this->cantidad[$key],
                    'peso_unit' => $this->peso_unit[$key], 
                    'peso_total' => $this->peso_total[$key]
                    'precio_unit' => $this->precio_unit[$key]
                    'monto' => $this->monto[$key]
                ]
            );
        }

        $this->inputs = [];

        $this->resetInputFields();

        session()->flash('message', 'Orden Created Successfully.');
    }

}
