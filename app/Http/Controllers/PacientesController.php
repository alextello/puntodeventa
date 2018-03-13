<?php

namespace PuntoVenta\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use PuntoVenta\User;
use PuntoVenta\Citas;
use PuntoVenta\Servicio;
use Response;
use Illuminate\Support\Facades\Input;
use Eloquent;
use Illuminate\Support\Facades\Mail;
use PuntoVenta\Mail\Welcome;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::with(['citas' => function ($query) {
      $query->orderBy('fecha', 'desc')->get();
    }])->withTrashed()->get()->except(Sentinel::getUser()->id);

      return view('lista-pacientes', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form-registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      try {
        //registra y activa la cuenta automaticamente
        $user = Sentinel::RegisterAndActivate($request->all());

        //busca el rol a asignarle a la nueva cuenta
        $rol = Sentinel::findRoleBySlug('user');

        //asignamos el rol al usuario y redireccionamos
        $rol->users()->attach($user);
        // Mail::to('alextello1@hotmail.com')->send(new Welcome());
        return redirect()->back()->with(['msj' => 'Registro Correcto']);;
    } catch (\Illuminate\Database\QueryException $e) {
         dd('Algo ha salido mal '.$e->getMessage());

     } catch (PDOException $e) {
         dd($e);
     }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $user = User::with(['citas' => function ($query) {
    $query->with(['servicio'])->orderby('fecha', 'des')->get();
    }])->find($id);
    $cont = 1;
    $citaP = User::with(['citas' => function ($query) {
    $query->where('estado', null)->with(['servicio'])->first();
    }])->find($id);
    return view('historial', ['user' => $user, 'cont' => $cont, 'citaP' => $citaP]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('form-edit', ['user' => $user]);
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
      $user = User::find($id);
      $newPassword = $request->get('password');
      if(empty($newPassword)){
        $user->update($request->except('password'));
      }else{
        $user->update($request->all());
      }
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
        $user = User::withTrashed()->find($id);
          if($user->trashed()){
            $user->restore();
          }
          else{
            $user->delete();
          }
          return redirect('pacientes');
    }
}
