<?php

namespace App\Http\Controllers;

use App\User_transport_ubication;
use App\Pay_module;
use Illuminate\Http\Request;

class User_transport_ubicationController extends Controller
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

        $user_transport_ubication = new user_transport_ubication;
        $user_transport_ubication->user_id = $request->user_id;
        $user_transport_ubication->module_id = $request->module_id;
        $user_transport_ubication->save();
        return response()->json(['Prueba'=>$user_transport_ubication], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User_transport_ubication  $user_transport_ubication
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        //
        $id_pay_module = User_transport_ubication::where('user_id',$user_id)->first();
        $id_pay_module = $id_pay_module->module_id;
        $pay_module = Pay_module::find($id_pay_module);
        $ruta = $pay_module->ruta;
        $latitud = $pay_module->latitud;
        $longitud = $pay_module->longitud;
        return response()->json(['id_module'=>$id_pay_module,
                                 'ruta'=>$ruta,
                                 'longitud'=>$longitud,
                                 'latitud'=>$latitud], 200);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User_transport_ubication  $user_transport_ubication
     * @return \Illuminate\Http\Response
     */
    public function edit(User_transport_ubication $user_transport_ubication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User_transport_ubication  $user_transport_ubication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User_transport_ubication $user_transport_ubication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User_transport_ubication  $user_transport_ubication
     * @return \Illuminate\Http\Response
     */
    public function destroy( $user_id)
    {
        //
        $user_transport_ubication = User_transport_ubication::where('user_id',$user_id)->delete();
        //$id = $user_transport_ubication->id;
        //return response()->json(['Prueba'=>$id], 200);

        //$user_transport_ubicationFinal= User_transport_ubication::find(2);

        //$user_transport_ubicationFinal->delete();

    }
}
