<?php

namespace PuntoVenta\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Activation;
use PuntoVenta\User;

class CRUDusers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $users = User::withTrashed()->get();
      return view('usuarios.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user = Sentinel::registerAndActivate($request->all());
      $role = Sentinel::findRoleBySlug('admin');
      $role->users()->attach($user);
      return view('usuarios.index');
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

      $user = User::find($id);
        return view('usuarios.edit',['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

    $user = User::withTrashed()->find($id);
    if($user->trashed()){
      $activation = Activation::create($user);
      $code = $activation->code;
      Activation::complete($user, $code);
        $user->restore();
    }

      if ($request->filled('password')) {
            $credentials = $request->toArray();
}
else{
  $credentials = $request->except(['password']);
}
      $user = Sentinel::findById($id);
      $user = Sentinel::update($user, $credentials);
      return redirect('usuarios');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $currentUser = Sentinel::getUser();
      $user = Sentinel::findById($id);
      if($currentUser == $user)
      return redirect('usuarios');
      else{
        $user = User::find($id);
        $user->delete();
        Activation::remove($user);
        return redirect('usuarios');
      }
    }
}
