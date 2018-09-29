<?php

namespace App\Http\Controllers;

use App\User_payment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class User_paymentController extends Controller
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

        $user_id=Input::get('user_id');
        $module_id=Input::get('module_id');
        $saldo=Input::get('saldo');
        $user = User::find($user_id);
      //  $saldo_user =  $user->saldo;
        //$user_id = $user->id;
        $user_payment = new user_payment;
        $user_payment->user_id = $user_id;
        $user_payment->module_id = $request->module_id;
        $user_payment->saldo = $user->saldo - $saldo;
        $user_payment->save();
        return response()->json(['Prueba'=>$user_payment,'prueba2'=>$request->user_id], 200);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User_payment  $user_payment
     * @return \Illuminate\Http\Response
     */
    public function show(User_payment $user_payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User_payment  $user_payment
     * @return \Illuminate\Http\Response
     */
    public function edit(User_payment $user_payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User_payment  $user_payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User_payment $user_payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User_payment  $user_payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(User_payment $user_payment)
    {
        //
    }
}
