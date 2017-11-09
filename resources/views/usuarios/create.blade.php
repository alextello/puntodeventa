@extends('layouts.menu')

@section('cuerpo')



  <div class="page">
    <div class="content-fluid">
  {!! Form::open(['route' => 'usuarios.store', 'files' => true, 'method'=>'POST']) !!}
    @include('usuarios.form')
  {!! Form::close() !!}

    </div>
  </div>

 <!-- <script src="{{ asset('js/input.js') }}"></script>  -->

@endsection
