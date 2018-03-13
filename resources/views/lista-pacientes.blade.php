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
    <link href="" rel="stylesheet" type="text/css" />

    <!-- Switchery css -->
    {!! Html::style('assets/plugins/switchery/switchery.min.css') !!}
    <link href="" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    {!! Html::style('assets/css/bootstrap.min.css') !!}
    <link href="" rel="stylesheet" type="text/css" />

    <!-- App CSS -->
    {!! Html::style('assets/css/style.css') !!}
    <link href="" rel="stylesheet" type="text/css" />

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
                        <a href="index.html" class="logo">
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
                                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="zmdi zmdi-notifications-none noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5><small><span class="label label-danger float-right">7</span>Notification</small></h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                                        <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1min ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                                        <p class="notify-details">New user registered.<small class="text-muted">1min ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                                        <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1min ago</small></p>
                                    </a>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                        View All
                                    </a>

                                </div>
                            </li>

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="zmdi zmdi-email noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg" aria-labelledby="Preview">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title bg-success">
                                        <h5><small><span class="label label-danger float-right">7</span>Messages</small></h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-faded">
                                            <img src="assets/images/users/avatar-2.jpg" alt="img" class="rounded-circle img-fluid">
                                        </div>
                                        <p class="notify-details">
                                            <b>Robert Taylor</b>
                                            <span>New tasks needs to be done</span>
                                            <small class="text-muted">1min ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-faded">
                                            <img src="assets/images/users/avatar-3.jpg" alt="img" class="rounded-circle img-fluid">
                                        </div>
                                        <p class="notify-details">
                                            <b>Carlos Crouch</b>
                                            <span>New tasks needs to be done</span>
                                            <small class="text-muted">1min ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-faded">
                                            <img src="assets/images/users/avatar-4.jpg" alt="img" class="rounded-circle img-fluid">
                                        </div>
                                        <p class="notify-details">
                                            <b>Robert Taylor</b>
                                            <span>New tasks needs to be done</span>
                                            <small class="text-muted">1min ago</small>
                                        </p>
                                    </a>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                        View All
                                    </a>

                                </div>
                            </li>

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link waves-effect waves-light right-bar-toggle" href="javascript:void(0);">
                                    <i class="zmdi zmdi-format-subject noti-icon"></i>
                                </a>
                            </li>

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="text-overflow"><small>Welcome ! John</small> </h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="/logout" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-power"></i> <span>Logout</span>
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
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li>
                                <a href="index.html"><i class="zmdi zmdi-view-dashboard"></i> <span> Inicio </span> </a>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="zmdi zmdi-format-underlined"></i> <span> Pacientes </span> </a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="pages-register.html">Agregar Paciente</a></li>
                                            <li><a href="pages-recoverpw.html">Buscar / Modificar Paciente</a></li>
                                            <li><a href="pages-lock-screen.html">Listar Pacientes</a></li>
                                            <li><a href="pages-lock-screen.html">Generar Usuario</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="zmdi zmdi-album"></i> <span> Citas </span> </a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="pages-register.html">Nueva Cita</a></li>
                                            <li><a href="pages-lock-screen.html">Listar Citas</a></li>
                                            <li><a href="pages-lock-screen.html">Posponer / Cancelar Cita</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="zmdi zmdi-collection-text"></i><span> Pagos </span> </a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="pages-register.html">Realizar Pago</a></li>
                                            <li><a href="pages-lock-screen.html">Pagos Pendientes</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="zmdi zmdi-format-list-bulleted"></i> <span> Reportes </span> </a>
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
              <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>whoops!</strong> {{ session('msj')}}
              </div>
              @elseif(session('success'))
              <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Bien!</strong> {{ session('success')}}
              </div>
              @endif
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
                                    <th>Residencia</th>
                                    <th>Telefono</th>
                                    <th>Proxima Cita</th>
                                    <th>Historial</th>
                                    <th>Modificar</th>
                                    <th>Crear Cita</th>
                                    <th>Activar/Desactivar</th>
                                </tr>
                                </thead>


                                <tbody>
                                  @forelse ($users as $key => $user)
                                  <tr>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->residencia }}</td>
                                <td>{{ $user->telefono }}</td>
                                @forelse ($user->citas as $citas)
                                <td>{{ $citas->fecha }}</td>
                                @empty
                                <td>Sin Datos</td>
                                @endforelse
                                <td>{!! link_to_route('pacientes.show', $title = 'Historial', $parameters = $user->id, $attributes = ['class' => 'btn btn-outline-warning waves-effect waves-light btn-sm']); !!}</td>
                                <td>{!! link_to_route('pacientes.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class' => 'btn btn-outline-primary waves-effect waves-light btn-sm']); !!}</td>
                                <td> {!! link_to_route('Ncita.edit', $title = 'Agregar Cita', $parameters = [$user->id], $attributes = ['class' => 'btn btn-outline-info waves-effect waves-light btn-sm']); !!}</td>
                                @if($user->trashed())
                                <td>{!! Form::open( ['route' => ['pacientes.destroy', $user->id],'method'=>'DELETE'] ) !!}
                                     {{ Form::button('Activar', ['class' => 'btn btn-outline-success waves-effect waves-light btn-sm', 'type'=>'submit']) }}
                                {!! Form::close() !!}</td>
                                @else
                                <td>  {!! Form::open( ['route' => ['pacientes.destroy', $user->id],'method'=>'DELETE'] ) !!}
                                     {{ Form::button('Desactivar', ['class' => 'btn btn-outline-danger waves-effect waves-light btn-sm', 'type'=>'submit']) }}
                                {!! Form::close() !!}</td>
                                @endif

                                </tr>
                                  @empty
                                  <td>Sin Datos</td>
                                  @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end row -->


            </div> <!-- container -->

            <div class="modal fade bs-example-modal-sm" id="modal-edit-customers{{ $user->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mySmallModalLabel">MODIFICAR PACIENTE</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                          <form action="#" data-parsley-validate novalidate>
                              <div class="form-group">
                                  <label for="userName">Nombres<span class="text-danger">*</span></label>
                                  <input type="text" name="nick" parsley-trigger="change" required
                                         placeholder="Enter user name" class="form-control" id="userName">
                              </div>
                              <div class="form-group">
                                  <label for="emailAddress">Apellidos<span class="text-danger">*</span></label>
                                  <input type="email" name="email" parsley-trigger="change" required
                                         placeholder="Enter email" class="form-control" id="emailAddress">
                              </div>
                              <div class="form-group">
                                  <label for="pass1">Campo 3<span class="text-danger">*</span></label>
                                  <input id="pass1" type="password" placeholder="Password" required
                                         class="form-control">
                              </div>

                              <div class="form-group text-right m-b-0">
                                  <button class="btn btn-primary waves-effect waves-light" type="submit">
                                      Guardar
                                  </button>
                                  <button type="reset" class="btn btn-secondary waves-effect m-l-5" data-dismiss="modal">
                                      Cancelar
                                  </button>
                              </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>

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