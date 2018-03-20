<?php

namespace PuntoVenta\Http\Controllers;

use Illuminate\Http\Request;
use PuntoVenta\Citas;
use Carbon\Carbon;
use PuntoVenta\Servicio;
use PuntoVenta\User;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $hoy = Carbon::now('America/Guatemala');
      $hoyF = $hoy->toDateString();
      $citas = Citas::with('user')->where('fecha', $hoyF)->get();
      return view('citasHoy', ['citas' => $citas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cita = Citas::find($id);
        return view('editarCita', ['cita' => $cita]);
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
        $Query = date('Y-m-d H:i:s', strtotime("$request->fecha $request->hora"));
        $Frequest = Carbon::parse($Query, 'America/Guatemala');
        $mergeQuery = date('Y-m-d H:i:s', strtotime("$cita->fecha $cita->hora"));
        $Fcita = Carbon::parse($mergeQuery, 'America/Guatemala');
        $length = $Frequest->diffInHours($Fcita);
        if($Frequest->lt($Fcita)){
          return redirect()->back()->with(['error' => 'No puede crear una cita al pasado']);
        }
        else{

        if($length >= 1){
          $cita->update($request->all());
          $cita->save();
          return redirect()->back()->with(['msj' => 'Registro Correcto']);
        }
        else{
          return redirect()->back()->with(['error' => 'Hay una cita a las '.$cita->hora.' Elija otra hora']);
        }
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
        $cita = Citas::find($id);
        $cita->estado = 2;
        $cita->save();
        return redirect()->back()->with(['msj' => 'Se ha eliminado correctamente']);
    }
}
