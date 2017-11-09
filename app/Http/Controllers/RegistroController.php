<?php

namespace PuntoVenta\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class RegistroController extends Controller
{
    public function registro(Request $request){
      $user = Sentinel::registerAndActivate($request->all());
      $role = Sentinel::findRoleBySlug('admin');
      $role->users()->attach($user);
      return redirect('/');
    }
}
