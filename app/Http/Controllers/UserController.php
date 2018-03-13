<?php

namespace PuntoVenta\Http\Controllers;

use Illuminate\Http\Request;
use PuntoVenta\Citas;
use Carbon\Carbon;


class UserController extends Controller
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cita = Citas::find($id);
        $merge = date('Y-m-d H:i:s', strtotime("$cita->fecha $cita->hora"));
        $ncita = Carbon::parse($merge, 'America/Guatemala');
        $now = Carbon::now('America/Guatemala');
        $length = $now->diffInHours($ncita);
        if($length > 24){
          $cita->solicitud = 1;
          $cita->save();
           return redirect()->back()->with(['msj' => 'Solicitud enviada, cuando el administrador verifique, ya no aparecerá su cita pendiente']);
        }
        else{
           return redirect('/')->with(['error' => 'No puede cancelar una cita en menos de 24 horas']);
        }

        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
