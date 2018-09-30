<?php

namespace App\Http\Controllers;

use App\Pay_module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class Pay_moduleController extends Controller
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
        $pay_module= new pay_module;
        $pay_module->ruta=$request->ruta;
        $pay_module->modelo=$request->modelo;
        $pay_module->latitud=$request->latitud;
        $pay_module->longitud=$request->longitud;
        $pay_module->save();

        return response()->json(['ok'=>'true'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id $pay_module
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo $id;
        return pay_module::where('id', $id)->get();


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pay_module  $pay_module
     * @return \Illuminate\Http\Response
     */
    public function edit(Pay_module $pay_module)
    {
        //
        return response()->json(['ok'=>'edit'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$pay_module = Pay_module::find($id);
        //$pay_module->ruta=$request->ruta;
        //$pay_module->save();
        //
        $latitud=Input::get('latitud');
        $longitud=Input::get('longitud');
        $pay_module= pay_module::find($id);
        $pay_module->latitud=$latitud;
        $pay_module->longitud=$longitud;
        $pay_module->save();

        //Pay_module::where('id', $id)->update($request->all());
        return response()->json(['ok'=>$longitud,'$pay_module'=>$latitud], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pay_module  $pay_module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pay_module $pay_module)
    {
        //
        return response()->json(['ok'=>'destroy'], 200);
    }
}
