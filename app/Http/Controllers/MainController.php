<?php

namespace PuntoVenta\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class MainController extends Controller
{
    public function dashboard(){
      if($user = Sentinel::check()){
        return view('dashboard.dashboard');
      }
      else {
        return redirect('/');
      }
    }
}
