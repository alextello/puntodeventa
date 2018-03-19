<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        {!! Html::style('assets/images/favicon.ico') !!}

        <!-- App title -->
        <title>Dashboard Operador</title>

        <!--Morris Chart CSS -->
        {!! Html::style('assets/plugins/morris/morris.css') !!}

        <!-- Switchery css -->
        {!! Html::style('assets/plugins/switchery/switchery.min.css') !!}

        <!-- Bootstrap CSS -->
        {!! Html::style('assets/css/bootstrap.min.css') !!}

        <!-- App CSS -->
        {!! Html::style('assets/css/style.css') !!}

        <!-- Modernizr js -->
        {!! Html::script('assets/js/modernizr.min.js') !!}

    </head>


    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="/" class="logo">
                            <i class="zmdi zmdi-group-work icon-c-logo"></i>
                            <span>MEDIX</span>
                        </a>
                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras navbar-topbar">

                        <ul class="list-inline float-right mb-0">

                            <li class="list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    {!! Html::image('assets/images/users/avatar-1.jpg', 'user', array('class' => 'rounded-circle')) !!}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="text-overflow"><small>{{ 'Hola '.Sentinel::getUser()->first_name}}</small> </h5>
                                    </div>
                                    <!-- item-->
                                    <a href="/logout" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-power">
                                          <span>Logout</span>  </i>
                                    </a>

                                </div>
                            </li>

                        </ul>

                    </div> <!-- end menu-extras -->
                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->


            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <ul class="navigation-menu">
                            <li>
                                <a href="/"><i class="fa fa-home"></i> <span> Inicio </span> </a>
                            </li>

                        </ul>
                        <!-- End navigation menu  -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End Navigation Bar-->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="wrapper">
            <div class="container">
              @if(session('msj'))
              <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Listo!</strong> {{ session('msj')}}
              </div>
              @endif
              @if(session('error'))
              <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Error... </strong> {{ session('error')}}
              </div>
              @endif
                <!-- Page-Title -->
                <div class="row">
                  @foreach($citaP->citas as $pcitas)
                  @if($citaP->citas != null)
                  <div class="card m-b-20 card-body">

                        <h4 class="card-title">El paciente <strong>{{ $citaP->first_name }}</strong> tiene una cita pendiente</h4>
                        <table class="tablesaw m-t-20 table m-b-0" data-tablesaw-mode="stack">
                            <thead>
                              <tr>
                                 <th>NOMBRE</th>
                                 <th>APELLIDO</th>
                                 <th>TELEFONO</th>
                                 <th>FECHA CITA</th>
                                 <th>HORA CITA</th>
                                 <th>ACCION</th>
                             </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $citaP->first_name }}</td>
                                <td>{{ $citaP->last_name }}</td>
                                <td>{{ $citaP->telefono }}</td>
                                <td>{{ $pcitas->fecha }}</td>
                                <td>{{ $pcitas->hora }}</td>
                                <td>
                                  <div class="btn-group" role="group" aria-label="Basic example">
                                    {!!  Form::open(['route' => ['user.update', $pcitas->id],'method'=>'PUT']) !!}
                                    {{ Form::button('Cancelar Cita', ['class' => 'btn btn-outline-danger waves-effect waves-light btn-sm', 'type'=>'submit']) }}
                                    {!! Form::close() !!}
                                </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                  <div>
              </div>
            </div>
            @endif
            @endforeach
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-15">
                          
                        </div>

                        <h4 class="page-title">Historia de citas de {{$user->first_name}} </h4>

                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="timeline">
                            @forelse($user->citas as $userC)
                            <article class="timeline-item ">
                                <div class="text-right">
                                    <div class="time-show first">

                                        <a href="#" class="btn btn-custom w-lg">{{\Carbon\Carbon::createFromTimeStamp(strtotime($userC->fecha))->diffForHumans()}}</a>
                                    </div>
                                </div>
                            </article>
                            @if($cont % 2 == 0)
                            <article class="timeline-item alt">
                                <div class="timeline-desk">
                                    <div class="panel">
                                        <div class="timeline-box">
                                            <span class="arrow-alt"></span>
                                            <span class="timeline-icon bg-danger"><i class="zmdi zmdi-circle"></i></span>
                                            <h4 class="text-danger">{{ \Carbon\Carbon::parse($userC->fecha)->format('d/m/Y')}}</h4>
                                            <p class="timeline-date text-muted"><small>{{ \Carbon\Carbon::parse($userC->hora)->format('g:i A') }}</small></p>
                                            <b class="pull-right">{{$user->first_name}}</b><br>
                                            <p>{{$userC->descripcion}}</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @else
                            <article class="timeline-item ">
                                <div class="timeline-desk">
                                    <div class="panel">
                                        <div class="timeline-box">
                                            <span class="arrow"></span>
                                            <span class="timeline-icon bg-success"><i class="zmdi zmdi-circle"></i></span>
                                            <h4 class="text-success">{{ \Carbon\Carbon::parse($userC->fecha)->format('d/m/Y')}}</h4>
                                            <p class="timeline-date text-muted"><small>{{ \Carbon\Carbon::parse($userC->hora)->format('g:i A') }}</small></p>
                                            <b class="timeline-date">{{$user->first_name}}</b>
                                            <p>{{$userC->descripcion}}</p>

                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endif
                            <?php $cont = $cont+1; ?>
                            @empty
                            <h1>Sin Historial</h1>
                            @endforelse
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div> <!-- container -->





            <!-- Modal -->
            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="#" method="POST">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mySmallModalLabel">Cancelar Cita</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <fieldset class="form-group">
                                    <label for="exampleTextarea">¿Por qué quieres cancelar la cita?</label>
                                        <textarea name="razon" class="form-control" id="exampleTextarea" rows="3" ></textarea>
                                </fieldset>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <input type="submit" class="btn btn-danger" value="Confirmar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>




            <!-- Footer -->
            <footer class="footer">
                2016 - 2017 © Uplon.
            </footer>
            <!-- End Footer -->



            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <div class="nicescroll">
                    <ul class="nav nav-pills nav-justified text-xs-center">
                        <li class="nav-item">
                            <a href="#home-2"  class="nav-link active" data-toggle="tab" aria-expanded="false">
                                Activity
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
                                Settings
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="home-2">
                            <div class="timeline-2">
                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 minutes ago</small>
                                        <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">30 minutes ago</small>
                                        <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">59 minutes ago</small>
                                        <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">1 hour ago</small>
                                        <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">3 hours ago</small>
                                        <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 hours ago</small>
                                        <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="messages-2">

                            <div class="row m-t-10">
                                <div class="col-8">
                                    <h5 class="m-0">Notifications</h5>
                                    <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-10">
                                <div class="col-8">
                                    <h5 class="m-0">API Access</h5>
                                    <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-10">
                                <div class="col-8">
                                    <h5 class="m-0">Auto Updates</h5>
                                    <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-10">
                                <div class="col-8">
                                    <h5 class="m-0">Online Status</h5>
                                    <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- end nicescroll -->
            </div>
            <!-- /Right-bar -->



        </div> <!-- End wrapper -->




        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script><!-- Tether for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>

        <!--Morris Chart-->
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>

        <!-- Counter Up  -->
        <script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <!-- Page specific js -->
        <script src="assets/pages/jquery.dashboard.js"></script>


    </body>
</html>
