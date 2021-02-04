<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedor;
use App\Models\Unidades;

class InventaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        $categorias = Categoria::all();
        $unidades = Unidades::all();

        return view('admin.products.index', compact('productos'), compact('categorias'), compact('unidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $date = \Carbon\Carbon::now();
        $fecha = $date->format('d-m-Y');

        $categorias = Categoria::pluck('nombre');
        $unidades = Unidades::pluck('nombre');
        $proveedores = Proveedor::pluck('nombre');

        return view('admin.products.create', compact('categorias', 'unidades', 'proveedores', 'fecha'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'slug' => 'required|unique:productos,slug,$product->id',
            'codigo' => 'required',
            'descripcion' => 'required',
            'id_categoria' => 'required',
            'unid_medida' => 'required',
            'cantidad' => 'required',
            'peso_unitario' => 'required',
            'id_proveedor' => 'required',
            'fecha_ingreso' => 'required',
            'precio_unit' => 'required',
            'flete_precio' => 'required',
            'ubicacion' => 'required',
            'ipc' => 'required',
            'stock_min' => 'required',
            'stock_max' => 'required',
            'ubicacion_geografica' => 'required',
            'monto' => 'required'
        ]);


        $product = Producto::create([
            $producto_critico = 'NO',

            'slug' => $request->slug,
            'codigo' => $request->codigo,
            'descripcion' => $request->descripcion,
            'id_categoria' => $request->id_categoria,
            'unid_medida' => $request->unid_medida,
            'cantidad' => $request->cantidad,
            'peso_unitario' => $request->peso_unitario,
            'id_proveedor' => $request->id_proveedor,
            'fecha_ingreso' => $request->fecha_ingreso,
            'precio_unit' => $request->precio_unit,
            'flete_precio' => $request->flete_precio,
            'ubicacion' => $request->ubicacion,
            'ipc' => $request->ipc,
            'stock_min' => $request->stock_min,
            'stock_max' => $request->stock_max,
            'ubicacion_geografica' => $request->ubicacion_geografica,
            'monto' => $request->monto,
            'inventario_inicial' => $request->cantidad,
            'peso_total' => $request->peso_unitario * $request->cantidad,
            'producto_critico' => $producto_critico 
        ]);

        //$product = Producto::create($request->all());

        return redirect()->route('admin.products.show', $product)->with('info', 'El item se creo con excito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $product)
    {

        $categorias = Categoria::all();
        $unidades = Unidades::all();


        return view('admin.products.edit', compact('product'), compact('categorias'), compact('unidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $product)
    {

        $request->validate([
            'slug' => 'required',
            'codigo' => 'required',
            'descripcion' => 'required',
            'unid_medida' => 'required',
            'peso_unitario' => 'required',
            'cantidad' => 'required',
            //'peso_total' => 'required',
            'ubicacion' => 'required',
            'ipc' => 'required',
            'stock_min' => 'required',
            'stock_max' => 'required',
            'ubicacion_geografica' => 'required',
            'monto' => 'required'
        ]);

        $product->cantidad = $product->cantidad - $request->cantidad; 

        $product->update($request->all());
        
        return redirect()->route('admin.products.edit', $product)->with('info', 'El item se actualizo con excito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $product)
    {
        //
    }
}
