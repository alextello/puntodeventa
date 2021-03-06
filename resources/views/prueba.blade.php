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
        <title>Dashboard Operador</title>

        <!-- Sweet Alert css -->
        <link href="assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css" />

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <!-- Switchery css -->
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="styleshe">
        <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">

        <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

        <!-- Modernizr js -->
        <script src="assets/js/modernizr.min.js"></script>

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
                                        <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
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
                            <li class="has-submenu active">
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
            <div class="container"><br>
                <!-- Page-Title -->
                <div class="row">
                  <div class="form-group">
                      <label>Date Range</label>
                      <div>
                          <div class="input-daterange input-group" id="date-range">
                              <input type="text" class="form-control" name="start" />
                              <span class="input-group-addon bg-custom b-0">to</span>
                              <input type="text" class="form-control" name="end" />
                          </div>
                      </div>
                  </div>

                  <br>
                      <div class="card m-b-20 card-body">

                            <h4 class="card-title">El paciente <strong>NombrePaciente</strong> tiene una cita pendiente</h4>
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
                                    <td>Lionel Andres</td>
                                    <td>Messi</td>
                                    <td>12345678</td>
                                    <td>06/03/2018</td>
                                    <td>10:52 AM</td>
                                    <td>
                                      <button type="button" class="btn btn-outline-primary waves-effect waves-light btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm1">Posponer cita</button>
                                      <button class="btn btn-warning btn-outline-danger waves-effect waves-light btn-sm" id="warning-alert">Cancelar Cita</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                      <div>
                  </div>
                </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="timeline">
                            <article class="timeline-item alt">
                                <div class="text-right">
                                    <div class="time-show first">
                                        <a href="#" class="btn btn-custom w-lg">Hoy</a>
                                    </div>
                                </div>
                            </article>
                            <article class="timeline-item alt">
                                <div class="timeline-desk">
                                    <div class="panel">
                                        <div class="timeline-box">
                                            <span class="arrow-alt"></span>
                                            <span class="timeline-icon bg-danger"><i class="zmdi zmdi-circle"></i></span>
                                            <h4 class="text-danger">Hace 1 hora(s)</h4>
                                            <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                            <b class="pull-right">Nombre Paciente</b><br>
                                            <p>Aquí se pondría cualquier información que ustedes consideren sobre la cita realizada</p>

                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="timeline-item ">
                                <div class="timeline-desk">
                                    <div class="panel">
                                        <div class="timeline-box">
                                            <span class="arrow"></span>
                                            <span class="timeline-icon bg-success"><i class="zmdi zmdi-circle"></i></span>
                                            <h4 class="text-success">Hace 2 hora(s)</h4>
                                            <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                            <b class="timeline-date">Nombre Paciente</b>
                                            <p>Aquí se pondría cualquier información que ustedes consideren sobre la cita realizada</p>

                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="timeline-item alt">
                                <div class="timeline-desk">
                                    <div class="panel">
                                        <div class="timeline-box">
                                            <span class="arrow-alt"></span>
                                            <span class="timeline-icon bg-primary"><i class="zmdi zmdi-circle"></i></span>
                                            <h4 class="text-primary">Hace 8 hora(s)</h4>
                                            <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                            <b class="pull-right">Nombre Paciente</b><br>
                                            <p>Aquí se pondría cualquier información que ustedes consideren sobre la cita realizada</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="timeline-item">
                                <div class="timeline-desk">
                                    <div class="panel">
                                        <div class="timeline-box">
                                            <span class="arrow"></span>
                                            <span class="timeline-icon bg-purple"><i class="zmdi zmdi-circle"></i></span>
                                            <h4 class="text-purple">14 hours ago</h4>
                                            <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                            <b>Nombre Paciente</b><br>
                                            <p>Aquí se pondría cualquier información que ustedes consideren sobre la cita realizada</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="timeline-item alt">
                                <div class="timeline-desk">
                                    <div class="panel">
                                        <div class="timeline-box">
                                            <span class="arrow-alt"></span>
                                            <span class="timeline-icon"><i class="zmdi zmdi-circle"></i></span>
                                            <h4 class="text-muted">19 hours ago</h4>
                                            <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                            <b class="pull-right">Nombre Paciente</b><br>
                                            <p>Aquí se pondría cualquier información que ustedes consideren sobre la cita realizada</p>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="timeline-item alt">
                                <div class="text-right">
                                    <div class="time-show">
                                        <a href="#" class="btn btn-custom w-lg">Ayer</a>
                                    </div>
                                </div>
                            </article>
                            <article class="timeline-item">
                                <div class="timeline-desk">
                                    <div class="panel">
                                        <div class="timeline-box">
                                            <span class="arrow"></span>
                                            <span class="timeline-icon bg-warning"><i class="zmdi zmdi-circle"></i></span>
                                            <h4 class="text-warning">07 January 2016</h4>
                                            <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                            <b>Nombre Paciente</b><br>
                                            <p>Aquí se pondría cualquier información que ustedes consideren sobre la cita realizada</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="timeline-item alt">
                                <div class="timeline-desk">
                                    <div class="panel">
                                        <div class="timeline-box">
                                            <span class="arrow-alt"></span>
                                            <span class="timeline-icon bg-primary"><i class="zmdi zmdi-circle"></i></span>
                                            <h4 class="text-primary">07 January 2016</h4>
                                            <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                            <b class="pull-right">Nombre Paciente</b><br>
                                            <p>Aquí se pondría cualquier información que ustedes consideren sobre la cita realizada</p>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="timeline-item">
                                <div class="timeline-desk">
                                    <div class="panel">
                                        <div class="timeline-box">
                                            <span class="arrow"></span>
                                            <span class="timeline-icon bg-success"><i class="zmdi zmdi-circle"></i></span>
                                            <h4 class="text-success">07 January 2016</h4>
                                            <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                            <b>Nombre Paciente</b><br>
                                            <p>Aquí se pondría cualquier información que ustedes consideren sobre la cita realizada</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="timeline-item alt">
                                <div class="text-right">
                                    <div class="time-show">
                                        <a href="#" class="btn btn-custom w-lg">Mes pasado</a>
                                    </div>
                                </div>
                            </article>

                            <article class="timeline-item alt">
                                <div class="timeline-desk">
                                    <div class="panel">
                                        <div class="timeline-box">
                                            <span class="arrow-alt"></span>
                                            <span class="timeline-icon"><i class="zmdi zmdi-circle"></i></span>
                                            <h4 class="text-muted">31 December 2015</h4>
                                            <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                            <b class="pull-right">Nombre Paciente</b><br>
                                            <p>Aquí se pondría cualquier información que ustedes consideren sobre la cita realizada</p>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="timeline-item">
                                <div class="timeline-desk">
                                    <div class="panel">
                                        <div class="timeline-box">
                                            <span class="arrow"></span>
                                            <span class="timeline-icon bg-danger"><i class="zmdi zmdi-circle"></i></span>
                                            <h4 class="text-danger">16 Decembar 2015</h4>
                                            <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                            <b>Nombre Paciente</b><br>
                                            <p>Aquí se pondría cualquier información que ustedes consideren sobre la cita realizada</p>
                                        </div>
                                    </div>
                                </div>
                            </article>

                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div> <!-- container -->





            <!-- Modal -->
            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="#">
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


            <!-- Modal -->
            <div class="modal fade bs-example-modal-sm1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="#" method="POST">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mySmallModalLabel1">Posponer Cita</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="form-group">
                                <label>Elija la nueva fecha</label>
                                <div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                        <span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
                                    </div><!-- input-group -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Elija la nueva hora</label>
                                <div class="input-group">
                                    <input id="timepicker3" type="text" class="form-control">
                                    <span class="input-group-addon"><i class="zmdi zmdi-time"></i></span>
                                </div><!-- input-group -->
                            </div>
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

        <script src="assets/plugins/moment/moment.js"></script>
        <script src="assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <script src="assets/plugins/mjolnic-bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/plugins/clockpicker/bootstrap-clockpicker.js"></script>
        <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

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
        <script src="assets/pages/jquery.form-pickers.init.js"></script>

        <!-- Sweet Alert js -->
        <script src="assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
        <script src="assets/pages/jquery.sweet-alert.init.js"></script>



    </body>
</html>
