<?php

namespace App\Http\Controllers;

use App\Models\OrdenPedido;
use Illuminate\Http\Request;

class OrdenPedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('ordenPedido.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\OrdenPedido  $ordenPedido
     * @return \Illuminate\Http\Response
     */
    public function show(OrdenPedido $ordenPedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrdenPedido  $ordenPedido
     * @return \Illuminate\Http\Response
     */
    public function edit(OrdenPedido $ordenPedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrdenPedido  $ordenPedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrdenPedido $ordenPedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrdenPedido  $ordenPedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrdenPedido $ordenPedido)
    {
        //
    }
}
