<?php

namespace App\Http\Controllers;

use App\Pulseras_user;
use App\User;
use Illuminate\Http\Request;

class Pulsera_userController extends Controller
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
        $pulseras_user = new pulseras_user;
        $pulseras_user->pulsera_id = $request->pulsera_id;
        $pulseras_user->owner_id = $request->owner_id;
        $pulseras_user->permited_user = $request->permited_user;
        $pulseras_user->save();
        return response()->json(['Prueba'=>$pulseras_user], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pulseras_user  $pulseras_user
     * @return \Illuminate\Http\Response
     */
    public function show($permited_user)
    {
        //
        $idDuenios = pulseras_user::where('permited_user',$permited_user)->get();
        $aux=0;
        $valueAux;
        $valueAuxNombre;
        foreach ($idDuenios as $value) {
          if($value['parent'] == 0){
            $valueAux[$aux]= $value['owner_id'];
          }
          $aux+=1;
        }

        $aux=0;

        foreach ($valueAux as $value) {
          $valueAuxNombre[$aux]= user::find($valueAux[$aux])->name;

          $JsonString[$valueAuxNombre[$aux]]=$valueAux[$aux];
          $aux+=1;
        }
        $jsonSt = json_encode($JsonString);
        //$owners_id =
        return response()->json([$JsonString], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pulseras_user  $pulseras_user
     * @return \Illuminate\Http\Response
     */
    public function edit(Pulseras_user $pulseras_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pulseras_user  $pulseras_user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pulseras_user $pulseras_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pulseras_user  $pulseras_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pulseras_user $pulseras_user)
    {
        //
    }
}
