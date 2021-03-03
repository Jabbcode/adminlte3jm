<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\orden_compra;
use App\Models\ordenProducto;
use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\Unidades;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = orden_compra::all();
        $proveedores = Proveedor::all();

        return view('admin.compras.index', compact('compras', 'proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $codigos = Producto::orderBy('id', 'ASC')->pluck('codigo');
        $descripciones = Producto::orderBy('id', 'ASC')->pluck('descripcion');
        $peso = Producto::orderBy('id', 'ASC')->pluck('peso_unitario');

        $producto = Producto::all();

        $proveedores = Proveedor::orderBy('id', 'ASC')->pluck('nombre');
        $orden = orden_compra::latest('id')->first();
        $orden->orden++;

        $date = \Carbon\Carbon::now();
        $fecha = $date->format('d-m-Y');

        return view('admin.compras.create', compact('proveedores', 'orden', 'fecha', 'codigos', 'descripciones', 'peso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(orden_compra $compra)
    {
        $proveedores = Proveedor::all();
        $unidades = Unidades::all();
        $i = 0;
        $id = $compra->id;
        
        $orden = ordenProducto::where('orden_compra_id', '=', $id)->get();
        
        $productos = Producto::all();

        /* echo $compra; */
        
        //echo $productos;

        //echo $ordenProducto;

        return view('admin.compras.show', compact('productos', 'orden', 'compra', 'proveedores', 'unidades', 'i'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
