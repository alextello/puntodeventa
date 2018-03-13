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
                        <a href="index" class="logo">
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
                                <a href="index"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="zmdi zmdi-format-underlined"></i> <span> User Interface </span> </a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="ui-buttons">Buttons</a></li>
                                            <li><a href="ui-cards">Cards</a></li>
                                            <li><a href="ui-dropdowns">Dropdowns</a></li>
                                            <li><a href="ui-checkbox-radio">Checkboxs-Radios</a></li>
                                            <li><a href="ui-navs">Navs</a></li>
                                            <li><a href="ui-progress">Progress</a></li>
                                            <li><a href="ui-modals">Modals</a></li>
                                            <li><a href="ui-alerts">Alerts</a></li>
                                            <li><a href="ui-bootstrap">Bootstrap UI</a></li>
                                            <li><a href="ui-typography">Typography</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="ui-notification">Notification</a></li>
                                            <li><a href="ui-carousel">Carousel</a></li>
                                            <li><a href="components-grid">Grid</a></li>
                                            <li><a href="components-range-sliders">Range sliders</a></li>
                                            <li><a href="components-sweet-alert">Sweet Alerts</a></li>
                                            <li><a href="components-ratings">Ratings</a></li>
                                            <li><a href="components-treeview">Treeview</a></li>
                                            <li><a href="components-tour">Tour</a></li>
                                            <li><a href="widgets-tiles">Tile Box</a></li>
                                            <li><a href="widgets-charts">Chart Widgets</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="zmdi zmdi-album"></i> <span> Icons </span> </a>
                                <ul class="submenu">
                                    <li><a href="icons-materialdesign">Material Design</a></li>
                                    <li><a href="icons-ionicons">Ion Icons</a></li>
                                    <li><a href="icons-fontawesome">Font awesome</a></li>
                                    <li><a href="icons-themify">Themify Icons</a></li>
                                    <li><a href="icons-simple-line">Simple line Icons</a></li>
                                    <li><a href="icons-weather">Weather Icons</a></li>
                                    <li><a href="icons-pe7">PE7 Icons</a></li>
                                    <li><a href="icons-typicons">Typicons</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="zmdi zmdi-collection-text"></i><span> Forms </span> </a>
                                <ul class="submenu">
                                    <li><a href="form-elements">General Elements</a></li>
                                    <li><a href="form-advanced">Advanced Form</a></li>
                                    <li><a href="form-validation">Form Validation</a></li>
                                    <li><a href="form-pickers">Form Pickers</a></li>
                                    <li><a href="form-wizard">Form Wizard</a></li>
                                    <li><a href="form-mask">Form Masks</a></li>
                                    <li><a href="form-uploads">Multiple File Upload</a></li>
                                    <li><a href="form-xeditable">X-editable</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="zmdi zmdi-format-list-bulleted"></i> <span> Tables </span> </a>
                                <ul class="submenu">
                                    <li><a href="tables-basic">Basic Tables</a></li>
                                    <li><a href="tables-datatable">Data Table</a></li>
                                    <li><a href="tables-responsive">Responsive Table</a></li>
                                    <li><a href="tables-tablesaw">Tablesaw</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="zmdi zmdi-chart"></i><span> Charts </span> </a>
                                <ul class="submenu">
                                    <li><a href="chart-flot">Flot Chart</a></li>
                                    <li><a href="chart-morris">Morris Chart</a></li>
                                    <li><a href="chart-chartjs">Chartjs</a></li>
                                    <li><a href="chart-peity">Peity Charts</a></li>
                                    <li><a href="chart-chartist">Chartist Charts</a></li>
                                    <li><a href="chart-c3">C3 Charts</a></li>
                                    <li><a href="chart-sparkline">Sparkline charts</a></li>
                                    <li><a href="chart-knob">Jquery Knob</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="zmdi zmdi-collection-item"></i> <span> Pages </span> </a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="calendar">Calendar</a></li>
                                            <li><a href="pages-starter">Starter Page</a></li>
                                            <li><a href="pages-login">Login</a></li>
                                            <li><a href="pages-register">Register</a></li>
                                            <li><a href="pages-recoverpw">Recover Password</a></li>
                                            <li><a href="pages-lock-screen">Lock Screen</a></li>
                                            <li><a href="pages-404">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="pages-500">Error 500</a></li>
                                            <li><a href="pages-timeline">Timeline</a></li>
                                            <li><a href="pages-invoice">Invoice</a></li>
                                            <li><a href="pages-pricing">Pricing</a></li>
                                            <li><a href="pages-gallery">Gallery</a></li>
                                            <li><a href="pages-maintenance">Maintenance</a></li>
                                            <li><a href="pages-comingsoon">Coming Soon</a></li>
                                        </ul>
                                    </li>
                                </ul>
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
                        <h4 class="page-title">Typicons Icons</h4>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-md-12">
                        <div id="all-icons">

                            <div class="card-box">

                                <div class="row icon-list-demo">
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-chart-pie-outline"></i> typcn typcn-chart-pie-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-chart-pie"></i> typcn typcn-chart-pie
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-chevron-left-outline"></i> typcn typcn-chevron-left-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-chevron-left"></i> typcn typcn-chevron-left
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-chevron-right-outline"></i> typcn typcn-chevron-right-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-chevron-right"></i> typcn typcn-chevron-right
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-clipboard"></i> typcn typcn-clipboard
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-cloud-storage"></i> typcn typcn-cloud-storage
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-cloud-storage-outline"></i> typcn typcn-cloud-storage-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-code-outline"></i> typcn typcn-code-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-code"></i> typcn typcn-code
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-coffee"></i> typcn typcn-coffee
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-cog-outline"></i> typcn typcn-cog-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-cog"></i> typcn typcn-cog
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-compass"></i> typcn typcn-compass
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-contacts"></i> typcn typcn-contacts
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-credit-card"></i> typcn typcn-credit-card
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-css3"></i> typcn typcn-css3
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-database"></i> typcn typcn-database
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-delete-outline"></i> typcn typcn-delete-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-delete"></i> typcn typcn-delete
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-device-desktop"></i> typcn typcn-device-desktop
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-device-laptop"></i> typcn typcn-device-laptop
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-device-phone"></i> typcn typcn-device-phone
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-device-tablet"></i> typcn typcn-device-tablet
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-directions"></i> typcn typcn-directions
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-divide-outline"></i> typcn typcn-divide-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-divide"></i> typcn typcn-divide
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-document-add"></i> typcn typcn-document-add
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-document-delete"></i> typcn typcn-document-delete
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-document-text"></i> typcn typcn-document-text
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-document"></i> typcn typcn-document
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-download-outline"></i> typcn typcn-download-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-download"></i> typcn typcn-download
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-dropbox"></i> typcn typcn-dropbox
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-edit"></i> typcn typcn-edit
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-eject-outline"></i> typcn typcn-eject-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-eject"></i> typcn typcn-eject
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-equals-outline"></i> typcn typcn-equals-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-equals"></i> typcn typcn-equals
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-export-outline"></i> typcn typcn-export-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-export"></i> typcn typcn-export
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-eye-outline"></i> typcn typcn-eye-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-eye"></i> typcn typcn-eye
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-feather"></i> typcn typcn-feather
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-film"></i> typcn typcn-film
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-filter"></i> typcn typcn-filter
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-flag-outline"></i> typcn typcn-flag-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-flag"></i> typcn typcn-flag
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-flash-outline"></i> typcn typcn-flash-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-flash"></i> typcn typcn-flash
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-flow-children"></i> typcn typcn-flow-children
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-flow-merge"></i> typcn typcn-flow-merge
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-flow-parallel"></i> typcn typcn-flow-parallel
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-flow-switch"></i> typcn typcn-flow-switch
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-folder-add"></i> typcn typcn-folder-add
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-folder-delete"></i> typcn typcn-folder-delete
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-folder-open"></i> typcn typcn-folder-open
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-folder"></i> typcn typcn-folder
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-gift"></i> typcn typcn-gift
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-globe-outline"></i> typcn typcn-globe-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-globe"></i> typcn typcn-globe
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-group-outline"></i> typcn typcn-group-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-group"></i> typcn typcn-group
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-headphones"></i> typcn typcn-headphones
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-heart-full-outline"></i> typcn typcn-heart-full-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-heart-half-outline"></i> typcn typcn-heart-half-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-heart-outline"></i> typcn typcn-heart-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-heart"></i> typcn typcn-heart
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-home-outline"></i> typcn typcn-home-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-home"></i> typcn typcn-home
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-html5"></i> typcn typcn-html5
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-image-outline"></i> typcn typcn-image-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-image"></i> typcn typcn-image
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-infinity-outline"></i> typcn typcn-infinity-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-infinity"></i> typcn typcn-infinity
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-info-large-outline"></i> typcn typcn-info-large-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-info-large"></i> typcn typcn-info-large
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-info-outline"></i> typcn typcn-info-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-info"></i> typcn typcn-info
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-input-checked-outline"></i> typcn typcn-input-checked-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-input-checked"></i> typcn typcn-input-checked
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-key-outline"></i> typcn typcn-key-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-key"></i> typcn typcn-key
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-keyboard"></i> typcn typcn-keyboard
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-leaf"></i> typcn typcn-leaf
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-lightbulb"></i> typcn typcn-lightbulb
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-link-outline"></i> typcn typcn-link-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-link"></i> typcn typcn-link
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-location-arrow-outline"></i> typcn typcn-location-arrow-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-location-arrow"></i> typcn typcn-location-arrow
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-location-outline"></i> typcn typcn-location-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-location"></i> typcn typcn-location
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-lock-closed-outline"></i> typcn typcn-lock-closed-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-lock-closed"></i> typcn typcn-lock-closed
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-lock-open-outline"></i> typcn typcn-lock-open-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-lock-open"></i> typcn typcn-lock-open
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-mail"></i> typcn typcn-mail
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-map"></i> typcn typcn-map
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-media-eject-outline"></i> typcn typcn-media-eject-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-media-eject"></i> typcn typcn-media-eject
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-media-fast-forward-outline"></i> typcn typcn-media-fast-forward-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-media-fast-forward"></i> typcn typcn-media-fast-forward
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-media-pause-outline"></i> typcn typcn-media-pause-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-media-pause"></i> typcn typcn-media-pause
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-media-play-outline"></i> typcn typcn-media-play-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-media-play-reverse-outline"></i>  typcn typcn-media-play-reverse-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-media-play-reverse"></i> typcn typcn-media-play-reverse
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-media-play"></i> typcn typcn-media-play
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-media-record-outline"></i> typcn typcn-media-record-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-media-record"></i> typcn typcn-media-record
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-media-rewind-outline"></i> typcn typcn-media-rewind-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-media-rewind"></i> typcn typcn-media-rewind
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-media-stop-outline"></i> typcn typcn-media-stop-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-media-stop"></i> typcn typcn-media-stop
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-message-typing"></i> typcn typcn-message-typing
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-message"></i> typcn typcn-message
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-messages"></i> typcn typcn-messages
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-microphone-outline"></i> typcn typcn-microphone-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-microphone"></i> typcn typcn-microphone
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-minus-outline"></i> typcn typcn-minus-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-minus"></i> typcn typcn-minus
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-mortar-board"></i> typcn typcn-mortar-board
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-news"></i> typcn typcn-news
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-notes-outline"></i> typcn typcn-notes-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-notes"></i> typcn typcn-notes
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-pen"></i> typcn typcn-pen
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-pencil"></i> typcn typcn-pencil
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-phone-outline"></i> typcn typcn-phone-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-phone"></i> typcn typcn-phone
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-pi-outline"></i> typcn typcn-pi-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-pi"></i> typcn typcn-pi
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-pin-outline"></i> typcn typcn-pin-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-pin"></i> typcn typcn-pin
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-pipette"></i> typcn typcn-pipette
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-plane-outline"></i> typcn typcn-plane-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-plane"></i> typcn typcn-plane
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-plug"></i> typcn typcn-plug
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-plus-outline"></i> typcn typcn-plus-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-plus"></i> typcn typcn-plus
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-point-of-interest-outline"></i> typcn typcn-point-of-interest-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-point-of-interest"></i> typcn typcn-point-of-interest
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-power-outline"></i> typcn typcn-power-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-power"></i> typcn typcn-power
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-printer"></i> typcn typcn-printer
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-puzzle-outline"></i> typcn typcn-puzzle-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-puzzle"></i> typcn typcn-puzzle
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-radar-outline"></i> typcn typcn-radar-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-radar"></i> typcn typcn-radar
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-refresh-outline"></i> typcn typcn-refresh-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-refresh"></i> typcn typcn-refresh
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-rss-outline"></i> typcn typcn-rss-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-rss"></i> typcn typcn-rss
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-scissors-outline"></i> typcn typcn-scissors-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-scissors"></i> typcn typcn-scissors
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-shopping-bag"></i> typcn typcn-shopping-bag
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-shopping-cart"></i> typcn typcn-shopping-cart
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-at-circular"></i> typcn typcn-social-at-circular
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-dribbble-circular"></i> typcn typcn-social-dribbble-circular
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-dribbble"></i> typcn typcn-social-dribbble
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-facebook-circular"></i> typcn typcn-social-facebook-circular
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-facebook"></i> typcn typcn-social-facebook
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-flickr-circular"></i> typcn typcn-social-flickr-circular
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-flickr"></i> typcn typcn-social-flickr
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-github-circular"></i> typcn typcn-social-github-circular
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-github"></i> typcn typcn-social-github
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-google-plus-circular"></i> typcn typcn-social-google-plus-circular
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-google-plus"></i> typcn typcn-social-google-plus
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-instagram-circular"></i> typcn typcn-social-instagram-circular
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-instagram"></i> typcn typcn-social-instagram
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-last-fm-circular"></i> typcn typcn-social-last-fm-circular
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-last-fm"></i> typcn typcn-social-last-fm
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-linkedin-circular"></i> typcn typcn-social-linkedin-circular
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-linkedin"></i> typcn typcn-social-linkedin
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-pinterest-circular"></i> typcn typcn-social-pinterest-circular
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-pinterest"></i> typcn typcn-social-pinterest
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-skype-outline"></i> typcn typcn-social-skype-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-skype"></i> typcn typcn-social-skype
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-tumbler-circular"></i> typcn typcn-social-tumbler-circular
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-tumbler"></i> typcn typcn-social-tumbler
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-twitter-circular"></i> typcn typcn-social-twitter-circular
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-twitter"></i> typcn typcn-social-twitter
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-vimeo-circular"></i> typcn typcn-social-vimeo-circular
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-vimeo"></i> typcn typcn-social-vimeo
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-youtube-circular"></i> typcn typcn-social-youtube-circular
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-social-youtube"></i> typcn typcn-social-youtube
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-sort-alphabetically-outline"></i> typcn typcn-sort-alphabetically-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-sort-alphabetically"></i> typcn typcn-sort-alphabetically
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-sort-numerically-outline"></i> typcn typcn-sort-numerically-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-sort-numerically"></i> typcn typcn-sort-numerically
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-spanner-outline"></i> typcn typcn-spanner-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-spanner"></i> typcn typcn-spanner
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-spiral"></i> typcn typcn-spiral
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-star-full-outline"></i> typcn typcn-star-full-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-star-half-outline"></i> typcn typcn-star-half-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-star-half"></i> typcn typcn-star-half
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-star-outline"></i> typcn typcn-star-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-star"></i> typcn typcn-star
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-starburst-outline"></i> typcn typcn-starburst-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-starburst"></i> typcn typcn-starburst
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-stopwatch"></i> typcn typcn-stopwatch
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-support"></i> typcn typcn-support
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-tabs-outline"></i> typcn typcn-tabs-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-tag"></i> typcn typcn-tag
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-tags"></i> typcn typcn-tags
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-th-large-outline"></i> typcn typcn-th-large-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-th-large"></i> typcn typcn-th-large
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-th-list-outline"></i> typcn typcn-th-list-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-th-list"></i> typcn typcn-th-list
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-th-menu-outline"></i> typcn typcn-th-menu-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-th-menu"></i> typcn typcn-th-menu
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-th-small-outline"></i> typcn typcn-th-small-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-th-small"></i> typcn typcn-th-small
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-thermometer"></i> typcn typcn-thermometer
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-thumbs-down"></i> typcn typcn-thumbs-down
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-thumbs-ok"></i> typcn typcn-thumbs-ok
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-thumbs-up"></i> typcn typcn-thumbs-up
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-tick-outline"></i> typcn typcn-tick-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-tick"></i> typcn typcn-tick
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-ticket"></i> typcn typcn-ticket
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-time"></i> typcn typcn-time
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-times-outline"></i> typcn typcn-times-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-times"></i> typcn typcn-times
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-trash"></i> typcn typcn-trash
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-tree"></i> typcn typcn-tree
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-upload-outline"></i> typcn typcn-upload-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-upload"></i> typcn typcn-upload
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-user-add-outline"></i> typcn typcn-user-add-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-user-add"></i> typcn typcn-user-add
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-user-delete-outline"></i> typcn typcn-user-delete-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-user-delete"></i> typcn typcn-user-delete
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-user-outline"></i> typcn typcn-user-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-user"></i> typcn typcn-user
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-vendor-android"></i> typcn typcn-vendor-android
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-vendor-apple"></i> typcn typcn-vendor-apple
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-vendor-microsoft"></i> typcn typcn-vendor-microsoft
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-video-outline"></i> typcn typcn-video-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-video"></i> typcn typcn-video
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-volume-down"></i> typcn typcn-volume-down
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-volume-mute"></i> typcn typcn-volume-mute
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-volume-up"></i> typcn typcn-volume-up
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-volume"></i> typcn typcn-volume
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-warning-outline"></i> typcn typcn-warning-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-warning"></i> typcn typcn-warning
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-watch"></i> typcn typcn-watch
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-waves-outline"></i> typcn typcn-waves-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-waves"></i> typcn typcn-waves
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-weather-cloudy"></i> typcn typcn-weather-cloudy
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-weather-downpour"></i> typcn typcn-weather-downpour
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-weather-night"></i> typcn typcn-weather-night
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-weather-partly-sunny"></i> typcn typcn-weather-partly-sunny
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-weather-shower"></i> typcn typcn-weather-shower
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-weather-snow"></i> typcn typcn-weather-snow
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-weather-stormy"></i> typcn typcn-weather-stormy
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-weather-sunny"></i> typcn typcn-weather-sunny
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-weather-windy-cloudy"></i> typcn typcn-weather-windy-cloudy
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-weather-windy"></i> typcn typcn-weather-windy
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-wi-fi-outline"></i> typcn typcn-wi-fi-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-wi-fi"></i> typcn typcn-wi-fi
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-wine"></i> typcn typcn-wine
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-world-outline"></i> typcn typcn-world-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-world"></i> typcn typcn-world
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-zoom-in-outline"></i> typcn typcn-zoom-in-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-zoom-in"></i> typcn typcn-zoom-in
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-zoom-out-outline"></i> typcn typcn-zoom-out-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-zoom-out"></i> typcn typcn-zoom-out
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-zoom-outline"></i> typcn typcn-zoom-outline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xs-12">
                                        <i class="typcn typcn-zoom"></i> typcn typcn-zoom
                                    </div>

                                </div>
                                <!-- End row -->
                            </div> <!-- end panel-body -->
                        </div> <!-- Panel-default-->
                    </div> <!-- col-->
                </div> <!-- End row -->


            </div> <!-- container -->


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

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
