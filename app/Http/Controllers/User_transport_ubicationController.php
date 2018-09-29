<?php

namespace App\Http\Controllers;

use App\User_transport_ubication;
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
    public function show(User_transport_ubication $user_transport_ubication)
    {
        //
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
    public function destroy(User_transport_ubication $user_transport_ubication)
    {
        //
    }
}
