<?php

namespace PuntoVenta\Http\Controllers;

use Illuminate\Http\Request;
use PuntoVenta\Servicio;
use PuntoVenta\Citas;
use PuntoVenta\User;
use Sentinel;

class NCitaController extends Controller
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
         $citaP = User::find($id)->citas()->where('estado',  null)->first();
        if($citaP){
          return redirect()->back()->with(['msj' => 'No puede asignarle una cita si ya hay una pendiente']);
        }
        else{
          $servicios = Servicio::all();
          return view('agregarCita', ['servicios' => $servicios, 'id'=>$id]);
        }
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
        $cita = new Citas;
        $cita->fecha = $request->fecha;
        $cita->hora = $request->hora;
        $cita->descripcion = $request->descripcion;
        $cita->idServicio = $request->idServicio;
        $cita->idUser = $id;
        $cita->idAdmin = Sentinel::getUser()->id;
        $cita->estado = null;
        $cita->save();
        return redirect('pacientes');
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
