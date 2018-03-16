@extends('layouts.admin')
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
                    <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"
                            data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i
                            class="fa fa-cog"></i></span></button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>

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
                            <h4 class="header-title m-t-0">Actualizar servicio</h4>
                            <p class="text-muted font-13 m-b-10">
                                Llenar todos los campos
                            </p>

                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="p-20">
                                      {!!  Form::model($servicio, ['route' => ['servicio.update', $servicio->id],'method'=>'PUT']) !!}
                                      @include('layouts.form-servicio')
                                      {!! Form::submit('Actualizar', ['class' => 'form-control btn btn-success']) !!}
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
