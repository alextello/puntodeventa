<?php

namespace PuntoVenta\Http\Controllers;
use Sentinel;
use PuntoVenta\User;
use PuntoVenta\Citas;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminController extends Controller
{

  public function citasHoy(){
    $hoy = Carbon::now('America/Guatemala');
    $hoy = $hoy->toDateString();
    $citas = Citas::with('user')->where('fecha', $hoy)->get();
    return view('citasHoy', ['citas' => $citas]);
  }

  public function citasFecha(){
    $hoy = Carbon::now('America/Guatemala');
    $hoy = $hoy->toDateString();
    $citas = Citas::with('user')->where('fecha', $hoy)->get();
     return view('citasFecha', ['citas' => $citas]);
  }

  public function citasFechaPost(Request $request){
      $nInicio = Carbon::parse($request->start)->format('Y-m-d');
      $nFin = Carbon::parse($request->end)->format('Y-m-d');
      $citas = Citas::with('user')->where('fecha', '>=', $nInicio)->where('fecha', '<=', $nFin)->get();
      return view('citasFecha', ['citas' => $citas]);
  }

  public function noVino(Request $request){
      $cita = Citas::find($request->id);
      $cita->estado = 2;
      $cita->save();
      return redirect()->back();
  }

    // public function listaPacientes(){
    //   $users = User::with(['citas' => function ($query) {
    //   $query->orderBy('fecha', 'asc')->first();
    //   }])->get();
    //   return view('lista-pacientes', ['users' => $users]);
    // }

}
