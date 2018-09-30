<?php

namespace App\Http\Controllers;

use App\Pulsera;
use Illuminate\Http\Request;

class PulseraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $pulsera = new pulsera;
        $pulsera->serial_number = $request->serial_number;
        $pulsera->creado = new\DateTime();
        $pulsera->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pulsera  $pulsera
     * @return \Illuminate\Http\Response
     */
    public function show(Pulsera $pulsera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pulsera  $pulsera
     * @return \Illuminate\Http\Response
     */
    public function edit(Pulsera $pulsera)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pulsera  $pulsera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pulsera $pulsera)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pulsera  $pulsera
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pulsera $pulsera)
    {
        //
    }
}
