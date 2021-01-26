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
            'slug' => 'required|unique:products',
            'codigo' => 'required|unique:products',
            'descripcion' => 'required',
            'inventario_inicial' => 'required',
            'unid_medida' => 'required',
            'peso_unitario' => 'required',
            'cantidad' => 'required',
            'peso_total' => 'required',
            'ubicacion' => 'required',
            'ipc' => 'required',
            'stock_max' => 'required',
            'stock_min' => 'required',
            'otra_ubicacion' => 'required',
            'monto' => 'required',
            'monto_dolar' => 'required',
        ]);
        
        $product = Producto::create($request->all());

        return redirect()->route('admin.products.edit', $product)->with('info', 'El item se creo con excito');
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

        $request->validate([
            'slug' => "required|unique:products,slug,$product->id",
            'codigo' => 'required|unique:products',
            'descripcion' => 'required',
            'inventario_inicial' => 'required',
            'unid_medida' => 'required',
            'peso_unitario' => 'required',
            'cantidad' => 'required',
            'peso_total' => 'required',
            'ubicacion' => 'required',
            'ipc' => 'required',
            'stock_max' => 'required',
            'stock_min' => 'required',
            'otra_ubicacion' => 'required',
            'monto' => 'required',
            'monto_dolar' => 'required',
        ]);

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
