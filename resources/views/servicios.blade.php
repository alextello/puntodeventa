<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App title -->
    <title>Servicios</title>

    <!-- DataTables -->
    {!! Html::style('assets/plugins/datatables/dataTables.bootstrap4.min.css') !!}
    {!! Html::style('aassets/plugins/datatables/buttons.bootstrap4.min.css') !!}
    <!-- Responsive datatable examples -->
    {!! Html::style('assets/plugins/datatables/responsive.bootstrap4.min.css') !!}

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

</head>


    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="index.html" class="logo">
                            <i class="fa fa-heartbeat"></i>
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
                                <a class="nav-link waves-effect waves-light right-bar-toggle" href="javascript:void(0);">
                                    <i class="zmdi zmdi-format-subject noti-icon"></i>
                                </a>
                            </li>

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                   {{ HTML::image('assets/images/users/avatar-1.jpg', 'alt user', array('class' => 'rounded-circle')) }}

                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="text-overflow"><small>Hola !Nombre</small> </h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-power"></i> <span>Salir</span>
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
                                <a href="index.html"><i class="fa fa-home"></i> <span> Inicio </span> </a>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-users"></i> <span> Pacientes </span> </a>
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
                                <a href="#"><i class="fa fa-calendar-plus-o"></i> <span> Citas </span> </a>
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

                            <li class="has-submenu active">
                                <a href="#"><i class="fa fa-ambulance"></i><span> Servicios </span> </a>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-line-chart"></i> <span> Reportes </span> </a>
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

              <div class="row">
                  <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                      <div class="card-box tilebox-one">
                          <i class="icon-layers float-right text-muted"></i>
                          <h6 class="text-muted text-uppercase m-b-20">Opcion Rapida</h6>
                          {!! link_to('servicio/create', $title = 'Agregar Servicio', $attributes = ['class' => "btn btn-primary waves-effect waves-light btn-sm"], $secure = null) !!}
                      </div>
                  </div>
              </div>
                <!-- Page-Title -->
                <div class="row">
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>MIS SERVICIOS</b></h4>
                            <p class="text-muted font-13 m-b-30">

                            </p>

                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Codigo</th>
                                    <th>Tipo de Servicio</th>
                                    <th>Descripcion</th>
                                    <th>Costo</th>
                                    <th>Modificar</th>
                                    <th>Estado</th>
                                </tr>
                                </thead>


                                <tbody>
                              @forelse($servicios as $ser)
                                <tr>
                                    <td>{{ $ser->id }}</td>
                                    <td>{{ $ser->codigo }}</td>
                                    <td>{{ $ser->tipo }}</td>
                                    <td>{{ $ser->descripcion }}</td>
                                    <td>{{ $ser->costo }}</td>
                                    <td>{!! link_to_route('servicio.edit', $title = 'Editar', $parameters = $ser->id, $attributes = ['class' => 'btn btn-outline-primary waves-effect waves-light btn-sm']); !!}</td>
                                    @if($ser->trashed())
                                    <td>{!! Form::open( ['route' => ['servicios.destroy', $ser->id],'method'=>'DELETE'] ) !!}
                                         {{ Form::button('Activar', ['class' => 'btn btn-outline-success waves-effect waves-light btn-sm', 'type'=>'submit']) }}
                                    {!! Form::close() !!}</td>
                                    @else
                                    <td>  {!! Form::open( ['route' => ['servicios.destroy', $ser->id],'method'=>'DELETE'] ) !!}
                                         {{ Form::button('Desactivar', ['class' => 'btn btn-outline-danger waves-effect waves-light btn-sm', 'type'=>'submit']) }}
                                    {!! Form::close() !!}</td>
                                    @endif
                                    @empty
                                </tr>
                              @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end row -->


            </div> <!-- container -->

            <div class="modal fade bs-example-modal-sm1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="#" method="POST">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mySmallModalLabel1">NUEVO SERVICIO</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <h6>Complete el siguiente formulario para agregar un nuevo servicio.</h6>
                            <hr>
                            <form action="#" data-parsley-validate novalidate>
                                <div class="form-group">
                                    <label>Tipo de servicio<span class="text-danger">*</span></label>
                                    <input type="text" name="servicio" parsley-trigger="change" required
                                           class="form-control" id="servicio">
                                </div>
                                <div class="form-group">
                                    <label>Descripcion<span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="descripcion" required
                                              rows="2"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Costo Q.<span class="text-danger">*</span></label>
                                    <input id="Costo" required
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                  <label>Cantindad minima de tratamientos</label>
                                  <select class="form-control" id="nTratamientos">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                  </select>
                                </div>
                                <hr>
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
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                2018 © Medix.
            </footer>
            <!-- End Footer -->



            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <div class="nicescroll">
                    <ul class="nav nav-pills nav-justified text-xs-center">
                        <li class="nav-item">
                            <a href="#home-2"  class="nav-link active" data-toggle="tab" aria-expanded="false">
                                Actividades
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="home-2">
                            <div class="timeline-2">
                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 minutes ago</small>
                                        <p><strong><a href="#" class="text-info">Paciente 1</a></strong> Solicito cancelar cita </p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">30 minutes ago</small>
                                        <p><a href="" class="text-info">Doctor</a> Finalizo Cita</p>
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
                    </div>
                </div> <!-- end nicescroll -->
            </div>
            <!-- /Right-bar -->



        </div> <!-- End wrapper -->




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

        <!-- Required datatable js -->
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
