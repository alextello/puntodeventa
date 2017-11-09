<?php

namespace PuntoVenta\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
  public function index(){
    if(Sentinel::check()){
      return view('dashboard.dashboard');
    }
    else {
      return view('autenticacion.login');
    }
  }

  public function login(Request $request){
    $name = $request->input('email');
    $pass = $request->input('password');
    Sentinel::authenticate([
    'login'    => $name,
    'password' => $pass,
]);
    if(Sentinel::check()){
      return view('dashboard.dashboard');
    }
    else {
      return view('autenticacion.login');
    }
  }

  public function loginGet(){
    if(Sentinel::check()){
      return view('dashboard.dashboard');
    }
    else {
      return view('autenticacion.login');
    }
  }

  public function logout(){
    Sentinel::logout(null, true);
    return redirect('/');
  }

   public function dashboard(Request $request){
     Sentinel::authenticate($request->all());
      if(Sentinel::check()){
        return view('dashboard.dashboard');
      }
      else {
        return ('necesitas loguearte');
      }
   }

   public function registro(Request $request){

   }

}
