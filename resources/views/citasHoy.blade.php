<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App title -->
    <title>Pacientes</title>

    <!-- DataTables -->
    {!! Html::style('assets/plugins/datatables/dataTables.bootstrap4.min.css') !!}
    {!! Html::style('assets/plugins/datatables/buttons.bootstrap4.min.css') !!}
    <!-- Responsive datatable examples -->
    {!! Html::style('assets/plugins/datatables/responsive.bootstrap4.min.css') !!}


    <!-- Switchery css -->
    {!! Html::style('assets/plugins/switchery/switchery.min.css') !!}


    <!-- Bootstrap CSS -->
    {!! Html::style('assets/css/bootstrap.min.css') !!}


    <!-- App CSS -->
    {!! Html::style('assets/css/style.css') !!}


    <!-- Modernizr js -->
    {!! Html::style('assets/js/modernizr.min.js') !!}
    <script src=""></script>
     <meta name="_token" content="{{ csrf_token() }}" />

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
                                        <h5 class="text-overflow"><small>{{ 'Hola! '.Sentinel::getUser()->first_name}}</small> </h5>
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
                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-users"></i> <span> Pacientes </span> </a>
                                <ul class="submenu megamenu">
                                    <li>
                                      <ul>
                                          <li>{!! link_to('pacientes/create', $title = 'Agregar Paciente', $attributes = [], $secure = null); !!}</li>
                                          <li>{!! link_to('pacientes', $title = 'Listar Pacientes', $attributes = [], $secure = null); !!}</li>
                                      </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-calendar-plus-o"></i> <span> Citas </span> </a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li>{!! link_to('citas-hoy', $title = 'Ver citas de hoy', $attributes = [], $secure = null); !!}</li>
                                            <li>{!! link_to('citas-por-fecha', $title = 'Ver citas por fecha', $attributes = [], $secure = null); !!}</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="{{ route('servicio.index') }}"><i class="fa fa-ambulance"></i><span> Servicios </span> </a>
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

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title"><br></h4>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>MIS PACIENTES</b></h4>
                            <p class="text-muted font-13 m-b-30"></p>

                            <table id="datatable" class="table table-striped table-bordered">
                  <thead>
                  <tr>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Telefono</th>
                      <th>Hora</th>
                      <th>Descripcion de cita</th>
                      <th>Estado</th>
                      <th>Culminar cita</th>
                      <th>No vino</th>
                  </tr>
                  </thead>


                  <tbody>
                    @forelse ($citas as $key => $ct)
                    <tr>
                  <td>{{ $ct->user->first_name }}</td>
                  <td>{{ $ct->user->last_name }}</td>
                  <td>{{ $ct->user->telefono }}</td>
                  <td>{{ $ct->hora }}</td>
                  <td>{{$ct->descripcion }}</td>
                  @if(empty($ct->estado))
                  <td>No culminada</td>
                  <td>{!! Form::open( ['route' => ['Ncita.destroy', $ct->id],'method'=>'DELETE'] ) !!}
                       {{ Form::button('Culminar', ['class' => 'btn btn-outline-danger waves-effect waves-light btn-sm', 'type'=>'submit']) }}
                  {!! Form::close() !!}</td>
                  <td>{!! Form::open( ['url' => 'novino','method'=>'POST'] ) !!}
                      {{ Form::hidden('id', $ct->id) }}
                       {{ Form::button('Cancelar', ['class' => 'btn btn-outline-danger waves-effect waves-light btn-sm', 'type'=>'submit']) }}
                  {!! Form::close() !!}</td>
                  @elseif($ct->estado == 2)
                  <td>Cancelada</td>
                  <td><strong>Cita cancelada</strong></td>
                  <td><strong>Cita cancelada</strong></td>
                  @elseif($ct->estado == 1)
                  <td>Culminada</td>
                  <td><strong>Cita culminada</strong></td>
                  <td><strong>Cita culminada</strong></td>
                  @endif
                  </tr>
                  @empty
                  @endforelse
                  </tbody>
              </table>
                        </div>
                    </div>
                </div> <!-- end row -->


            </div> <!-- container -->



            <!-- Footer -->
            <footer class="footer">
                2016 - 2017 UMG
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

      <div class="modal fade" id="create" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" name="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-tittle"></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" role="form" action="#" method="post">
                <div class="form-group row">
                    <div class="col-12">
                        <input class="form-control" type="email" name="email" placeholder="Email">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <input class="form-control" type="text" name="first_name" required="" placeholder="Nombres">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <input class="form-control" type="text" name="last_name" required="" placeholder="Apellidos">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <input class="form-control" type="number" name="telefono" required="" placeholder="Telefono">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <input class="form-control" type="text" name="residencia" required="" placeholder="Residencia">
                    </div>
                </div>

                <div class="form-group row">
                  <div class="col-12">
                    <p>Nacimiento: </p>
                    <input type="date" name="nacimiento" required="" class="form-control" placeholder="Fecha de nacimiento">
                  </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <input class="form-control" type="text" name="username" required="" placeholder="Username">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <input class="form-control" type="password" name="password" required="" placeholder="Password">
                    </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" type="submit" id="add" name="add">
              <span class="fa fa-plus"></span> Añadir</button>
              <button type="button" name="button" class="btn btn-danger">Cerrar</button>
            </div>
          </div>
        </div>
      </div>


        <script>
            var resizefunc = [];
        </script>



        <!-- jQuery  -->
        {!! Html::script('assets/js/jquery.min.js') !!}
        {!! Html::script('assets/js/popper.min.js') !!}
        {!! Html::script('assets/js/bootstrap.min.js') !!}
        {!! Html::script('assets/js/waves.js') !!}
        {!! Html::script('assets/js/jquery.nicescroll.js') !!}
        {!! Html::script('assets/plugins/switchery/switchery.min.js') !!}
        {!! Html::script('assets/plugins/datatables/jquery.dataTables.min.js') !!}
        {!! Html::script('assets/plugins/datatables/dataTables.bootstrap4.min.js') !!}


        <!-- Responsive examples -->
        {!! Html::script('assets/plugins/datatables/dataTables.responsive.min.js') !!}
        {!! Html::script('assets/plugins/datatables/responsive.bootstrap4.min.js') !!}

        <!-- App js -->
        {!! Html::script('assets/js/jquery.core.js') !!}
        {!! Html::script('assets/js/jquery.app.js') !!}
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>


    </body>
</html>
