<?php

namespace PuntoVenta\Http\Controllers;
use Sentinel;
use PuntoVenta\User;
use PuntoVenta\Citas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function listaPacientes(){
      $users = User::with(['citas' => function ($query) {
      $query->orderBy('fecha', 'asc')->first();
      }])->get();
      return view('lista-pacientes', ['users' => $users]);
    }

}
