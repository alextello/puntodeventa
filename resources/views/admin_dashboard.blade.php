@extends('layouts.admin')
@section('cuerpo')
<div class="wrapper">
    <div class="container">
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
                <h4 class="page-title">Pagina Principal</h4>
            </div>
        </div>


        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-layers float-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Pacientes</h6>
                    <h2 class="m-b-20" data-plugin="counterup">{{$numUsers}}</h2>
                    <span class="label label-success"> +11% </span> <span class="text-muted">From previous period</span>
                </div>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-paypal float-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Citas</h6>
                    <h2 class="m-b-20"><span data-plugin="counterup">{{$numCitas}}</span></h2>
                    <span class="label label-danger"> -29% </span> <span class="text-muted">From previous period</span>
                </div>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-chart float-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Pagos</h6>
                    <h2 class="m-b-20">$<span data-plugin="counterup">15.9</span></h2>
                    <span class="label label-pink"> 0% </span> <span class="text-muted">From previous period</span>
                </div>
            </div>


        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xs-12 col-lg-12 col-xl-7">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-20">SOLICITUDES DE CANCELACION DE CITAS</h4>

                            <div class="inbox-widget nicescroll" style="height: 330px;">
                              @forelse($citasPend as $ct)
                              {!! Form::open( ['route' => ['citas.destroy', $ct->id],'method'=>'DELETE'] ) !!}
                                  <div class="inbox-item">
                                      <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="rounded-circle" alt=""></div>
                                      <p class="inbox-item-author">{{ $ct->user->first_name }}</p>
                                      <p class="inbox-item-text">{{ $ct->descripcion }}</p>
                                      <p class="inbox-item-date">{{ 'Telefono: ' . $ct->user->telefono . '/'.' Fecha: ' . $ct->fecha }}</p>
                                        {{ Form::button('Eliminar', ['class' => 'btn btn-outline-danger waves-effect waves-light btn-sm pull-right', 'type'=>'submit']) }}
                                  </div>
                              {!! Form::close() !!}

                                @empty
                                <p><strong>Sin solicitudes de cancelacion</strong></p>
                                @endforelse
                                <!-- <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                                        <p class="inbox-item-author">Tomaslau</p>
                                        <p class="inbox-item-text">I've finished it! See you so...</p>
                                        <p class="inbox-item-date">13:34 PM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""></div>
                                        <p class="inbox-item-author">Stillnotdavid</p>
                                        <p class="inbox-item-text">This theme is awesome!</p>
                                        <p class="inbox-item-date">13:17 PM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""></div>
                                        <p class="inbox-item-author">Kurafire</p>
                                        <p class="inbox-item-text">Nice to meet you</p>
                                        <p class="inbox-item-date">12:20 PM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""></div>
                                        <p class="inbox-item-author">Shahedk</p>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <p class="inbox-item-date">10:15 AM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-6.jpg" class="rounded-circle" alt=""></div>
                                        <p class="inbox-item-author">Adhamdannaway</p>
                                        <p class="inbox-item-text">This theme is awesome!</p>
                                        <p class="inbox-item-date">9:56 AM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-8.jpg" class="rounded-circle" alt=""></div>
                                        <p class="inbox-item-author">Arashasghari</p>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <p class="inbox-item-date">10:15 AM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-9.jpg" class="rounded-circle" alt=""></div>
                                        <p class="inbox-item-author">Joshaustin</p>
                                        <p class="inbox-item-text">I've finished it! See you so...</p>
                                        <p class="inbox-item-date">9:56 AM</p>
                                    </div>
                                </a> -->
                            </div>

                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-20">Porcentaje de citas</h4>

                            <p class="font-600 m-b-5">Cancelada <span class="text-danger pull-right"><b>78%</b></span></p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-xs bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                            </div>
                        </div>

                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-20">Porcentaje de citas</h4>

                            <p class="font-600 m-b-5">Culminadas <span class="text-success pull-right"><b>25%</b></span></p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-success progress-xs" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-20">Porcentaje de citas</h4>

                            <p class="font-600 m-b-5">Pendientes <span class="text-warning pull-right"><b>75%</b></span></p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning progress-xs" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>
            </div><!-- end col-->

            <div class="col-xs-12 col-lg-12 col-xl-5">
                <div class="card-box">

                    <h4 class="header-title m-t-0 m-b-30">Proximas Citas</h4>

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr>
                                <th>Paciente</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Estado</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="text-muted">Apple Technology</th>
                                <td>20/02/2014</td>
                                <td>19/02/2020</td>
                                <td><span class="label label-success">Paid</span></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Envato Pty Ltd.</th>
                                <td>20/02/2014</td>
                                <td>19/02/2020</td>
                                <td><span class="label label-danger">Unpaid</span></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Dribbble LLC.</th>
                                <td>20/02/2014</td>
                                <td>19/02/2020</td>
                                <td><span class="label label-success">Paid</span></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Adobe Family</th>
                                <td>20/02/2014</td>
                                <td>19/02/2020</td>
                                <td><span class="label label-success">Paid</span></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Apple Technology</th>
                                <td>20/02/2014</td>
                                <td>19/02/2020</td>
                                <td><span class="label label-danger">Unpaid</span></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Envato Pty Ltd.</th>
                                <td>20/02/2014</td>
                                <td>19/02/2020</td>
                                <td><span class="label label-success">Paid</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div><!-- end col-->

        </div>
        <!-- end row -->


    </div> <!-- container -->
    @endsection
