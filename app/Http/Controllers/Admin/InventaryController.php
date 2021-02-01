<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Producto;

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

        return view('admin.products.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
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
            'slug' => 'required|unique:products,slug,$product->id',
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

        $product = Producto::create([
            'slug' => $request->slug,
            'codigo' => $request->codigo,
            'descripcion' => $request->descripcion,
            'inventario_inicial' => $request->cantidad,
            'unid_medida' => $request->unid_medida,
            'peso_unitario' => $request->peso_unitario,
            'cantidad' => $request->cantidad,
            'peso_total' => $request->peso_unitario * $request->cantidad,
            'ubicacion' => $request->ubicacion,
            'ipc' => $request->ipc,
            'stock_min' => $request->stock_min,
            'stock_max' => $request->stock_max,
            'ubicacion_grografica' => $request->otra_ubicacion,
            'monto' => $request->monto
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
        return view('admin.products.edit', compact('product'));
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

        $product->inventario_inicial = $request->cantidad; 
        
        //$product->save();

        $product->update($request->all());
        
        return redirect()->route('admin.products.index', $product)->with('info', 'El item se actualizo con excito');
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
