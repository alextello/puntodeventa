@extends('layouts.menu')

@section('cuerpo')
<div class="page">
  <div class="content-fluid">
  {!! Form::model($user, ['route' => ['usuarios.update', $user->id],'method'=>'PUT'] ) !!}
    @include('usuarios.form')
  {!! Form::close() !!}

  </div>
</div>

@endsection
