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
        <title>Uplon - Responsive Admin Dashboard Template</title>

        <!-- Plugins css -->
        <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="assets/plugins/mjolnic-bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="assets/plugins/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet">

        <!-- Switchery css -->
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

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
                        <a href="/" class="logo">
                            <i class="zmdi zmdi-group-work icon-c-logo"></i>
                            <span>Uplon</span>
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
                                    {!! Html::image('assets/images/users/avatar-1.jpg', 'user', array('class' => 'rounded-circle')) !!}
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
                        <h4 class="page-title">Form Pickers</h4>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">

                            <div class="row">
                                <div class="col-sm-12 col-xs-12 col-md-6">
                                    <h4 class="header-title m-t-0">Timepicker</h4>
                                    <p class="text-muted font-13 m-b-10">
                                        Easily select a time for a text input using your mouse or keyboards arrow keys.
                                    </p>

                                    <div class="p-20">
                                        <div class="form-group">
                                            <label>Default Time Picker</label>
                                            <div class="input-group">
                                                <input id="timepicker" type="text" class="form-control">
                                                <span class="input-group-addon"><i class="zmdi zmdi-time"></i></span>
                                            </div><!-- input-group -->
                                        </div>

                                        <div class="form-group">
                                            <label>24 Hour Mode Time Picker</label>
                                            <div class="input-group">
                                                <input id="timepicker2" type="text" class="form-control">
                                                <span class="input-group-addon"><i class="zmdi zmdi-time"></i></span>
                                            </div><!-- input-group -->
                                        </div>

                                        <div class="form-group">
                                            <label>Specify a step for the minute field</label>
                                            <div class="input-group">
                                                <input id="timepicker3" type="text" class="form-control">
                                                <span class="input-group-addon"><i class="zmdi zmdi-time"></i></span>
                                            </div><!-- input-group -->
                                        </div>

                                    </div>

                                </div>

                                <div class="col-sm-12 col-xs-12 col-md-6">
                                    <h4 class="header-title m-t-0">Colorpicker</h4>
                                    <p class="text-muted font-13 m-b-10">
                                        Add color picker to field or to any other element.
                                    </p>

                                    <div class="p-20">
                                        <form action="#">
                                            <div class="form-group">
                                                <label>Default</label>
                                                <input type="text" class="colorpicker-default form-control" value="#8fff00">
                                            </div>
                                            <div class="form-group">
                                                <label>RGBA</label>
                                                <input type="text" class="colorpicker-rgba form-control" value="rgb(0,194,255,0.78)" data-color-format="rgba">
                                            </div>
                                            <div class="form-group m-b-0">
                                                <label>As Component</label>
                                                <div data-color-format="rgb" data-color="rgb(255, 146, 180)" class="colorpicker-default input-group">
                                                    <input type="text" readonly="readonly" value="" class="form-control">
															<span class="input-group-btn add-on">
																<button class="btn btn-white" type="button">
																	<i style="background-color: rgb(124, 66, 84);margin-top: 2px;"></i>
																</button>
															</span>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row m-t-50">
                                <div class="col-sm-12 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Date Picker</h4>
                                    <p class="text-muted font-13 m-b-10">
                                        The datepicker is tied to a standard form input field. Click on the input to open
                                        an interactive calendar in a small overlay. Click elsewhere on the page or hit the Esc
                                        key to close. If a date is chosen, feedback is shown as the input's value.
                                    </p>

                                    <div class="row">
                                        <div class="col-lg-8">

                                            <div class="p-20">
                                                <form action="#">
                                                    <div class="form-group">
                                                        <label>Default Functionality</label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                                                <span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Auto Close</label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                                                <span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Multiple Date</label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-multiple-date">
                                                                <span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>

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

                                                </form>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">

                                            <div class="p-20">

                                                <label>Display Inline</label>
                                                <div class="input-group">
                                                    <div id="datepicker-inline"></div>
                                                </div><!-- input-group -->

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- end row -->


                            <div class="row m-t-50">

                                <div class="col-sm-6 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Date Range Picker</h4>
                                    <p class="text-muted font-13 m-b-10">
                                        A JavaScript component for choosing date ranges.
                                        Designed to work with the Bootstrap CSS framework.
                                    </p>

                                    <div class="p-20">
                                        <form>
                                            <div class="form-group">
                                                <label>With all options</label>
                                                <div id="reportrange" class="pull-right form-control">
                                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="form-group m-t-50">
                                                <label>Date Range Pick</label>
                                                <div>
                                                    <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2015 - 01/31/2015"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Date Range With Time</label>
                                                <div>
                                                    <input type="text" class="form-control input-daterange-timepicker" name="daterange" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM"/>
                                                </div>
                                            </div>
                                            <div class="form-group m-b-0">
                                                <label>Limit Selectable Dates</label>
                                                <div>
                                                    <input class="form-control input-limit-datepicker" type="text" name="daterange" value="06/01/2015 - 06/07/2015"/>
                                                </div>
                                            </div>
                                        </form>

                                    </div>

                                </div>

                                <div class="col-sm-6 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Clock Picker</h4>
                                    <p class="text-muted font-13 m-b-10">
                                        A clock-style timepicker for Bootstrap (or jQuery).Your awesome text goes here.
                                    </p>

                                    <div class="p-20">
                                        <label>Default Clock Picker</label>
                                        <div class="input-group clockpicker m-b-20">
                                            <input type="text" class="form-control" value="09:30">
                                            <span class="input-group-addon"> <span class="zmdi zmdi-time"></span> </span>
                                        </div>

                                        <label>Auto close</label>
                                        <div class="input-group clockpicker m-b-20" data-placement="top" data-align="top" data-autoclose="true">
                                            <input type="text" class="form-control" value="13:14">
                                            <span class="input-group-addon"> <span class="zmdi zmdi-time"></span> </span>
                                        </div>

                                        <label>Now time</label>
                                        <div class="input-group m-b-20">
                                            <input class="form-control" id="single-input" value="" placeholder="Now">
                                                    <span class="input-group-btn">
                                                    	<button type="button" id="check-minutes" class="btn waves-effect waves-light btn-primary">Check the minutes</button>
                                                    </span>
                                        </div>

                                        <label>Place at left, align the arrow to top </label>
                                        <div class="input-group clockpicker" data-placement="top" data-align="top">
                                            <input type="text" class="form-control" value="13:14">
                                            <span class="input-group-addon"> <span class="zmdi zmdi-time"></span> </span>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- end row -->

                        </div>
                    </div><!-- end col-->

                </div>
                <!-- end row -->


            </div> <!-- container -->


            <!-- Footer -->
            <footer class="footer">
                2018 UMG
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

        <script src="assets/plugins/clockpicker/bootstrap-clockpicker.js"></script>

        <script src="assets/pages/jquery.form-pickers.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
