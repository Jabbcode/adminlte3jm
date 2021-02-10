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

        /*echo var_dump($categorias[0]->id);

        echo var_dump($productos[0]->id_categoria); */

        return view('admin.products.index', compact('productos', 'categorias', 'unidades'));
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

        $categorias = Categoria::orderBy('id', 'ASC')->pluck('nombre');
        $unidades = Unidades::orderBy('id', 'ASC')->pluck('nombre');
        $proveedores = Proveedor::orderBy('id', 'ASC')->pluck('nombre');

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
            'id_unidades' => 'required',
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
        ]);


        $product = Producto::create([
            $producto_critico = 'NO',

            $monto = ($request->precio_unit + $request->flete_precio) * $request->cantidad,

            $request->id_categoria = $request->id_categoria + 1, 
            $request->id_proveedor = $request->id_proveedor + 1, 
            $request->id_unidades = $request->id_unidades + 1, 

            'slug' => $request->slug,
            'codigo' => $request->codigo,
            'descripcion' => $request->descripcion,
            'id_categoria' => $request->id_categoria,
            'id_unidades' => $request->id_unidades,
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
            'monto' => $monto,
            'inventario_inicial' => $request->cantidad,
            'peso_total' => $request->peso_unitario * $request->cantidad,
            'producto_critico' => $producto_critico 
        ]);

        //echo $product;

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

        /*$categorias = Categoria::orderBy('id', 'ASC')->pluck('nombre'); */
        /*$unidades = Unidades::orderBy('id', 'ASC')->pluck('nombre'); */
        /*$proveedores = Proveedor::orderBy('id', 'ASC')->pluck('nombre'); */

        $categoria = Categoria::where('id', '=', $product->id_categoria)->get();
        $proveedor = Proveedor::where('id', '=', $product->id_proveedor)->get();
        $unidades = Unidades::where('id', '=', $product->id_unidades)->get();

        $nombreCategoria = $categoria[0]->nombre;
        $nombreProveedor = $proveedor[0]->nombre;
        $nombreUnidad = $unidades[0]->nombre;

        return view('admin.products.show', compact('product', 'nombreCategoria', 'nombreProveedor', 'nombreUnidad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $product)
    {

        $categorias = Categoria::orderBy('id', 'ASC')->pluck('nombre');
        $unidades = Unidades::orderBy('id', 'ASC')->pluck('nombre');
        $proveedores = Proveedor::orderBy('id', 'ASC')->pluck('nombre');

        $product->id_categoria = $product->id_categoria - 1;
        $product->id_proveedor = $product->id_proveedor - 1; 
        $product->id_unidades = $product->id_unidades - 1;

        $date = \Carbon\Carbon::now();
        $fecha = $date->format('d-m-Y');


        return view('admin.products.edit', compact('product', 'categorias', 'unidades', 'proveedores', 'fecha'));
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
            'id_categoria' => 'required',
            'id_unidades' => 'required',
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
            'ubicacion_geografica' => 'required'
        ]);    

        $product->update([
            /*if($request->cantidad <= $request->stock_min) {
                $request->producto_critico = 'SI'
            } */

            $request->id_categoria = $request->id_categoria + 1, 
            $request->id_proveedor = $request->id_proveedor + 1, 
            $request->id_unidades = $request->id_unidades + 1, 
            /* $request->cantidad = $product->cantidad - $request->cantidad, */
            $monto = ($request->precio_unit + $request->flete_precio) * $request->cantidad,

            'slug' => $request->slug,
            'codigo' => $request->codigo,
            'descripcion' => $request->descripcion,
            'id_categoria' => $request->id_categoria,
            'id_unidades' => $request->id_unidades,
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
            'monto' => $monto,
            'inventario_inicial' => $request->cantidad,
            'peso_total' => $request->peso_unitario * $request->cantidad
            /* 'producto_critico' => $producto_critico  */
        ]);

        
        //$product->update($request->all());
        //$product->save();
        
        return redirect()->route('admin.products.show', $product)->with('info', 'El item se actualizo con excito');
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
