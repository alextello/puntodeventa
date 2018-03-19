@extends('layouts.admin')
@section('usuario')
{{'Hola! '.Sentinel::getUser()->first_name}}
@endsection
@section('cuerpo')
<div class="wrapper">
    <div class="container">
      @if(session('msj'))
      <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>{{ session('msj')}}</strong>
      </div>
      @endif

      @if(session('error'))
      <div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>{{ session('error')}}</strong>
      </div>
      @endif
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">

                </div>
                <h4 class="page-title">Formulario de registro</h4>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <div class="row">
                        <div class="col-12">
                            <h4 class="header-title m-t-0">Nuevo Servicio</h4>
                            <p class="text-muted font-13 m-b-10">
                                Llenar todos los campos
                            </p>

                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="p-20">
                                      {!!  Form::open(['route' => 'servicio.store', 'method' => 'POST']) !!}
                                      @include('layouts.form-servicio')
                                      {{ Form::button('Guardar', ['class' => 'btn btn-outline-success waves-effect waves-light btn-sm pull-right', 'type'=>'submit']) }}
                                      {!! Form::close() !!}
                                    </div>
                                </div>
                            </div> <!-- end row -->

                        </div>
                    </div>
                    <!-- end row -->


                    <!-- end row -->

                </div>
            </div><!-- end col-->

        </div>
        <!-- end row -->

    </div> <!-- container -->


@endsection
