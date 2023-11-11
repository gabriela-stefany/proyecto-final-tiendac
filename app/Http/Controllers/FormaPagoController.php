<?php

namespace App\Http\Controllers;

use App\Models\FormaPago;
use Illuminate\Http\Request;

class FormaPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('formaPago.index');
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
     * @param  \App\Models\FormaPago  $formaPago
     * @return \Illuminate\Http\Response
     */
    public function show(FormaPago $formaPago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormaPago  $formaPago
     * @return \Illuminate\Http\Response
     */
    public function edit(FormaPago $formaPago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormaPago  $formaPago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormaPago $formaPago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormaPago  $formaPago
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormaPago $formaPago)
    {
        //
    }
}
