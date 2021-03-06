<?php

namespace PuntoVenta\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use PuntoVenta\User;
use PuntoVenta\Citas;
use PuntoVenta\Servicio;
use PuntoVenta\Mail\NuevoUsuario;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
  public function index(){
    if(Sentinel::check() && Sentinel::getUser()->roles()->first()->slug=='administrator'){
  $role = Sentinel::findRoleById(2);//creamos un objeto del rol user
  $numUsers = $role->users()->with('roles')->count();//consultamos cuantos usuarios hay con ese rol
  $numCitas = Citas::where('estado', 1)->orWhere('estado', null)->count();
  $citasPend = Citas::with(['user'])->where('solicitud', '1')->where('estado', null)->get();
  $pxCitas = Citas::with(['user'])->where('estado', null)->get();
  $pagos = Citas::with(['servicio'])->where('estado', '1')->get();
  $dinero = 0;
  foreach($pagos as $p){
    $dinero = $dinero+$p->servicio->costo;
  }
  $totalCitas = Citas::all()->count();
  $terminadas = Citas::where('estado', '1')->count();
  $cancelacion = Citas::where('estado', null)->where('solicitud', '1')->count();
  if($totalCitas > 0){
  $Pterminadas = ($terminadas/$totalCitas)*100;
  $Psolicitudes = ($cancelacion/$totalCitas)*100;
}
else{
  $Pterminadas = 100;
  $Psolicitudes = 0;
}
$Ppendientes = 100-$Pterminadas;


  return view('admin_dashboard', ['numUsers' => $numUsers, 'numCitas' => $numCitas, 'citasPend' => $citasPend, 'pxCitas' => $pxCitas, 'dinero' => $dinero, 'Ppendientes' => $Ppendientes, 'Pterminadas' => $Pterminadas, 'Psolicitudes' => $Psolicitudes]);//retornamos la vista con dicha variable
}
  else if(Sentinel::check() && Sentinel::getUser()->roles()->first()->slug=='user')
  {
  $user = User::with(['citas' => function ($query) {
  $query->with(['servicio'])->orderby('fecha', 'des')->get();
}])->find(Sentinel::getUser()->id);
  $cont = 1;
  $citaP = User::with(['citas' => function ($query) {
  $query->where('estado', null)->with(['servicio'])->first();
  }])->find(Sentinel::getUser()->id);
  return view('miHistorial', ['user' => $user, 'cont' => $cont, 'citaP' => $citaP]);
}
  else
    return view('autenticacion.login');
  }





  public function login(Request $request){
    try{
          $name = $request->input('email');
          $pass = $request->input('password');

          Sentinel::authenticate([
          'login'    => $name,
          'password' => $pass,
      ]);

                if(Sentinel::check()){
                  $userf = User::withTrashed()->find(Sentinel::getUser()->id);
                  if($userf->trashed()){
                    Sentinel::logout(null, true);
                    return redirect('/')->with(['error' => 'Su usuario ha sido deshabilitado']);
                  }
                  else{
                    $slug = Sentinel::getUser()->roles->first()->slug; //busca su rol para redireccionarlo a la pagina correcta
                      if($slug == 'administrator')
                        {
                          $role = Sentinel::findRoleById(2);//creamos un objeto del rol user
                          $numUsers = $role->users()->with('roles')->count();//consultamos cuantos usuarios hay con ese rol
                          $numCitas = Citas::where('estado', 1)->orWhere('estado', null)->count();
                          $citasPend = Citas::with(['user'])->where('solicitud', '1')->where('estado', null)->get();
                          $pxCitas = Citas::with(['user'])->where('estado', null)->get();
                          $pagos = Citas::with(['servicio'])->where('estado', '1')->get();
                          $dinero = 0;
                          foreach($pagos as $p){
                            $dinero = $dinero+$p->servicio->costo;
                          }
                          $totalCitas = Citas::all()->count();
                          $terminadas = Citas::where('estado', '1')->count();
                          $cancelacion = Citas::where('estado', null)->where('solicitud', '1')->count();
                          if($totalCitas > 0){
                          $Pterminadas = ($terminadas/$totalCitas)*100;
                          $Psolicitudes = ($cancelacion/$totalCitas)*100;
                        }
                        else{
                          $Pterminadas = 100;
                          $Psolicitudes = 0;
                        }
                        $Ppendientes = 100-$Pterminadas;


                          return view('admin_dashboard', ['numUsers' => $numUsers, 'numCitas' => $numCitas, 'citasPend' => $citasPend, 'pxCitas' => $pxCitas, 'dinero' => $dinero, 'Ppendientes' => $Ppendientes, 'Pterminadas' => $Pterminadas, 'Psolicitudes' => $Psolicitudes]);//retornamos la vista con dicha variable
                        }
                        else{

                          $user = User::with(['citas' => function ($query) {
                          $query->with(['servicio'])->orderby('fecha', 'des')->get();
                        }])->find(Sentinel::getUser()->id);
                          $cont = 1;
                          $citaP = User::with(['citas' => function ($query) {
                          $query->where('estado', null)->with(['servicio'])->first();
                        }])->find(Sentinel::getUser()->id);
                          return view('miHistorial', ['user' => $user, 'cont' => $cont, 'citaP' => $citaP]);
                        }
                  }
                }
                else{
                  return redirect()->back()->with(['error' => 'usuario o contraseña incorrecta']);//con datos incorrectos notifica error
                }
      }catch(ThrottlingException $e){
        $espera = $e->getDelay();
        return redirect()->back()->with(['error' => 'Demasiados intentos, has sido bloqueado por ' .$espera. ' segundos']);
    }
//     $name = $request->input('email');
//     $pass = $request->input('password');
//
//     Sentinel::authenticate([
//     'login'    => $name,
//     'password' => $pass,
// ]);
//     if(Sentinel::check()){
//       return view('form-pickers');
//     }
//     else {
//       return view('autenticacion.login');
//     }
  }

  public function dashboard(){

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

   // public function dashboard(Request $request){
   //   Sentinel::authenticate($request->all());
   //    if(Sentinel::check()){
   //      return view('dashboard.dashboard');
   //    }
   //    else {
   //      return ('necesitas loguearte');
   //    }
   // }

   public function registro(Request $request){

   }

}
