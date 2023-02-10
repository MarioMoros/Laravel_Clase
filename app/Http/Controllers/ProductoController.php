<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreproductoRequest;
use App\Http\Requests\UpdateproductoRequest;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = Producto::all();
        return view("productos/productos", ["productos" => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("productos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproductoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductoRequest $request)
    {
        //
        $producto = new Producto($request->input());
        $producto->saveOrFail();

        $productos = Producto::all();
        return view("productos/productos",["productos"=>$productos]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductoRequest  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductoRequest $request, producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(producto $producto)
    {
        //
    }
}
