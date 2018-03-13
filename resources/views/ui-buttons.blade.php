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
                        <h4 class="page-title">Buttons</h4>
                    </div>
                </div>
                <!-- end row -->


                <!-- Row start -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="header-title m-t-0">Default Buttons</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.
                                    </p>

                                    <div class="button-list">
                                        <button type="button" class="btn btn-primary waves-effect waves-light">Primary</button>
                                        <button type="button" class="btn btn-secondary waves-effect">Secondary</button>
                                        <button type="button" class="btn btn-success waves-effect waves-light">Success</button>
                                        <button type="button" class="btn btn-info waves-effect waves-light">Info</button>
                                        <button type="button" class="btn btn-warning waves-effect waves-light">Warning</button>
                                        <button type="button" class="btn btn-danger waves-effect waves-light">Danger</button>
                                        <button type="button" class="btn btn-dark waves-effect waves-light">Dark</button>
                                        <button type="button" class="btn btn-purple waves-effect waves-light">Purple</button>
                                        <button type="button" class="btn btn-pink waves-effect waves-light">Pink</button>
                                        <button type="button" class="btn btn-light waves-effect">Light</button>
                                        <button type="button" class="btn btn-link waves-effect">Link</button>
                                        <button type="button" class="btn btn-custom waves-effect waves-light">Custom</button>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <h4 class="header-title m-t-0">Default Rounded Button</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Add <code>.btn-rounded</code> to default button to get rounded corners.
                                    </p>

                                    <div class="button-list">
                                        <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">Primary</button>
                                        <button type="button" class="btn btn-secondary btn-rounded waves-effect">Secondary</button>
                                        <button type="button" class="btn btn-success btn-rounded waves-effect waves-light">Success</button>
                                        <button type="button" class="btn btn-info btn-rounded waves-effect waves-light">Info</button>
                                        <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light">Warning</button>
                                        <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">Danger</button>
                                        <button type="button" class="btn btn-dark btn-rounded waves-effect waves-light">Dark</button>
                                        <button type="button" class="btn btn-light btn-rounded waves-effect">Light</button>
                                        <button type="button" class="btn btn-purple btn-rounded waves-effect waves-light">Purple</button>
                                        <button type="button" class="btn btn-pink btn-rounded waves-effect waves-light">Pink</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row m-t-50">
                                <div class="col-md-6 m-t-20">
                                    <h4 class="header-title m-t-0">Outline Buttons</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the <code>.btn-*-outline</code> ones to remove all background images and colors on any button.
                                    </p>

                                    <div class="button-list">
                                        <button type="button" class="btn btn-outline-primary waves-effect waves-light">Primary</button>
                                        <button type="button" class="btn btn-outline-secondary waves-effect">Secondary</button>
                                        <button type="button" class="btn btn-outline-success waves-effect waves-light">Success</button>
                                        <button type="button" class="btn btn-outline-info waves-effect waves-light">Info</button>
                                        <button type="button" class="btn btn-outline-warning waves-effect waves-light">Warning</button>
                                        <button type="button" class="btn btn-outline-danger waves-effect waves-light">Danger</button>
                                        <button type="button" class="btn btn-outline-dark waves-effect waves-light">Dark</button>
                                        <button type="button" class="btn btn-outline-light waves-effect">Light</button>
                                        <button type="button" class="btn btn-outline-purple waves-effect waves-light">Purple</button>
                                        <button type="button" class="btn btn-outline-pink waves-effect waves-light">Pink</button>
                                        <button type="button" class="btn btn-outline-custom waves-effect waves-light">Custom</button>
                                    </div>
                                </div>

                                <div class="col-md-6 m-t-20">
                                    <h4 class="header-title m-t-0">Outline Rounded Button</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the <code>.btn-*-outline</code> <code>.btn-rounded</code> ones to remove all background images and colors on any button.
                                    </p>

                                    <div class="button-list">
                                        <button type="button" class="btn btn-outline-primary btn-rounded waves-effect waves-light">Primary</button>
                                        <button type="button" class="btn btn-outline-secondary btn-rounded waves-effect">Secondary</button>
                                        <button type="button" class="btn btn-outline-success btn-rounded waves-effect waves-light">Success</button>
                                        <button type="button" class="btn btn-outline-info btn-rounded waves-effect waves-light">Info</button>
                                        <button type="button" class="btn btn-outline-warning btn-rounded waves-effect waves-light">Warning</button>
                                        <button type="button" class="btn btn-outline-danger btn-rounded waves-effect waves-light">Danger</button>
                                        <button type="button" class="btn btn-outline-dark btn-rounded waves-effect waves-light">Dark</button>
                                        <button type="button" class="btn btn-outline-light btn-rounded waves-effect">Light</button>
                                        <button type="button" class="btn btn-outline-purple btn-rounded waves-effect waves-light">Purple</button>
                                        <button type="button" class="btn btn-outline-pink btn-rounded waves-effect waves-light">Pink</button>
                                        <button type="button" class="btn btn-outline-custom btn-rounded waves-effect waves-light">Custom</button>
                                    </div>

                                </div>
                            </div>

                            <div class="row m-t-50">
                                <div class="col-md-6 m-t-20">
                                    <h4 class="header-title m-t-0">Button-Width</h4>
                                    <p class="text-muted m-b-30 font-13">
                                        Create buttons with minimum width by adding add <code>.w-xs</code>, <code>.w-sm</code>, <code>.w-md</code> or <code>.w-lg</code>.
                                    </p>

                                    <div class="button-list">
                                        <button type="button" class="btn btn-primary waves-effect waves-light w-xs">Xs</button>
                                        <button type="button" class="btn btn-purple waves-effect waves-light w-sm">Small</button>
                                        <button type="button" class="btn btn-info waves-effect waves-light w-md">Middle</button>
                                        <button type="button" class="btn btn-warning waves-effect waves-light w-lg">Large</button>
                                    </div>
                                </div>

                                <div class="col-md-6 m-t-20">
                                    <h4 class="header-title m-t-0">Button-Sizes</h4>
                                    <p class="text-muted m-b-30 font-13">
                                        Add <code>.btn-lg</code>, <code>.btn-sm</code> for additional sizes.
                                    </p>

                                    <div class="button-list">
                                        <button class="btn btn-primary waves-effect waves-light btn-lg">Large button</button>
                                        <button class="btn btn-success waves-effect waves-light btn-sm">Small button</button>
                                    </div>
                                </div>

                            </div>

                            <div class="row m-t-50">
                                <div class="col-md-6 m-t-20">
                                    <h4 class="header-title m-t-0">Button Labels</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>,
                                        or <code>&lt;input&gt;</code> element. And put <code>&lt;span&gt;</code>
                                        with class <code>.btn-label</code> and any <code>icon</code> inside it. If you want to put
                                        icon on right side then add class <code>.btn-label-right</code> in <code>&lt;span&gt;</code>
                                    </p>

                                    <div class="button-list">
                                        <button type="button" class="btn btn-success waves-effect waves-light">
                                                   <span class="btn-label"><i class="fa fa-check"></i>
                                                   </span>Success</button>

                                        <button type="button" class="btn btn-danger waves-effect waves-light">
                                                   <span class="btn-label"><i class="fa fa-times"></i>
                                                   </span>Danger</button>

                                        <button type="button" class="btn btn-info waves-effect waves-light">
                                                   <span class="btn-label"><i class="fa fa-exclamation"></i>
                                                   </span>Info</button>

                                        <button type="button" class="btn btn-warning waves-effect waves-light">
                                                   <span class="btn-label"><i class="fa fa-warning"></i>
                                                   </span>Warning</button>
                                        <br>

                                        <button type="button" class="btn btn-primary waves-effect waves-light">
                                                   <span class="btn-label"><i class="fa fa-arrow-left"></i>
                                                   </span>Left</button>

                                        <button type="button" class="btn btn-success waves-effect waves-light">Right
                                                   <span class="btn-label btn-label-right"><i class="fa fa-arrow-right"></i>
                                                   </span>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-md-6 m-t-20">
                                    <h4 class="header-title m-t-0">Button Labels Rounded</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>,
                                        or <code>&lt;input&gt;</code> element. And put <code>&lt;span&gt;</code>
                                        with class <code>.btn-label</code> and any <code>icon</code> inside it. If you want to put
                                        icon on right side then add class <code>.btn-label-right</code> in <code>&lt;span&gt;</code>
                                    </p>

                                    <div class="button-list">
                                        <button type="button" class="btn btn-success btn-rounded waves-effect waves-light">
                                                   <span class="btn-label"><i class="fa fa-check"></i>
                                                   </span>Success</button>

                                        <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">
                                                   <span class="btn-label"><i class="fa fa-times"></i>
                                                   </span>Danger</button>

                                        <button type="button" class="btn btn-info btn-rounded waves-effect waves-light">
                                                   <span class="btn-label"><i class="fa fa-exclamation"></i>
                                                   </span>Info</button>

                                        <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light">
                                                   <span class="btn-label"><i class="fa fa-warning"></i>
                                                   </span>Warning</button>
                                        <br>

                                        <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">
                                                   <span class="btn-label"><i class="fa fa-arrow-left"></i>
                                                   </span>Left</button>

                                        <button type="button" class="btn btn-success btn-rounded waves-effect waves-light">Right
                                                   <span class="btn-label btn-label-right"><i class="fa fa-arrow-right"></i>
                                                   </span>
                                        </button>
                                    </div>

                                </div>
                            </div>


                            <div class="row m-t-50">
                                <div class="col-md-6 m-t-20">
                                    <h4 class="header-title m-t-0">Icon Button</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Icon only button.
                                    </p>

                                    <div class="button-list">
                                        <button class="btn waves-effect btn-secondary"> <i class="fa fa-heart-o"></i> </button>
                                        <button class="btn waves-effect waves-light btn-danger disabled"> <i class="fa fa-remove"></i> </button>
                                        <button class="btn waves-effect waves-light btn-purple"> <i class="fa fa-music"></i> </button>
                                        <button class="btn waves-effect waves-light btn-primary"> <i class="fa fa-star"></i> </button>
                                        <button class="btn waves-effect waves-light btn-success"> <i class="fa fa-thumbs-o-up"></i> </button>
                                        <button class="btn waves-effect waves-light btn-info"> <i class="fa fa-keyboard-o"></i> </button>
                                        <button class="btn waves-effect waves-light btn-warning"> <i class="fa fa-wrench"></i> </button>
                                        <br>
                                        <button class="btn btn-secondary waves-effect"> <i class="fa fa-heart m-r-5"></i> <span>Like</span> </button>
                                        <button class="btn btn-dark waves-effect waves-light"> <i class="fa fa-envelope-o m-r-5"></i> <span>Share</span> </button>
                                        <button class="btn btn-warning waves-effect waves-light"> <i class="fa fa-rocket m-r-5"></i> <span>Launch</span> </button>
                                        <button class="btn btn-info waves-effect waves-light disabled"> <i class="fa fa-cloud m-r-5"></i> <span>Cloud Hosting</span> </button>
                                        <button class="btn btn-pink waves-effect waves-light"> <span>Book Flight</span> <i class="fa fa-plane m-l-5"></i> </button>
                                        <button class="btn btn-purple waves-effect waves-light"> <span>Donate Money</span> <i class="fa fa-money m-l-5"></i> </button>
                                    </div>

                                </div>

                                <div class="col-md-6 m-t-20">
                                    <h4 class="header-title m-t-0">Block Button</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Create block level buttons,with by adding add <code>.btn-block</code>.
                                    </p>

                                    <div class="button-list">
                                        <button type="button" class="btn btn-block btn-lg btn-primary waves-effect waves-light">Block Button</button>
                                        <button type="button" class="btn btn-block btn--md btn-pink waves-effect waves-light active">Block Button</button>
                                        <button type="button" class="btn btn-block btn-sm btn-success waves-effect waves-light">Block Button</button>
                                    </div>

                                </div>
                            </div>

                            <div class="row m-t-50">
                                <div class="col-md-6 m-t-20">
                                    <h4 class="header-title m-t-0">Social Buttons with label</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Use class <code>.btn-@yoursocial</code> to the parent.
                                    </p>

                                    <div class="button-list">
                                        <button type="button" class="btn btn-facebook waves-effect waves-light">
                                                   <span class="btn-label"><i class="fa fa-facebook"></i>
                                                   </span>Facebook</button>

                                        <button type="button" class="btn btn-twitter waves-effect waves-light">
                                                   <span class="btn-label"><i class="fa fa-twitter"></i>
                                                   </span>Twitter</button>

                                        <button type="button" class="btn btn-linkedin waves-effect waves-light">
                                                   <span class="btn-label"><i class="fa fa-linkedin"></i>
                                                   </span>Linkdin</button>

                                        <button type="button" class="btn btn-dribbble waves-effect waves-light">
                                                   <span class="btn-label"><i class="fa fa-dribbble"></i>
                                                   </span>Dribbble</button>

                                        <button type="button" class="btn btn-googleplus waves-effect waves-light">
                                                   <span class="btn-label"><i class="fa fa-google-plus"></i>
                                                   </span>Google+</button>

                                        <button type="button" class="btn btn-instagram waves-effect waves-light">
                                            <span class="btn-label"><i class="fa fa-instagram"></i> </span>Instagram
                                        </button>

                                        <button type="button" class="btn btn-pinterest waves-effect waves-light">
                                            <span class="btn-label"><i class="fa fa-pinterest"></i> </span>Pinterest
                                        </button>

                                        <button type="button" class="btn btn-dropbox waves-effect waves-light">
                                            <span class="btn-label"><i class="fa fa-dropbox"></i> </span>Dropbox
                                        </button>

                                        <button type="button" class="btn btn-flickr waves-effect waves-light">
                                            <span class="btn-label"><i class="fa fa-flickr"></i> </span>Flickr
                                        </button>

                                        <button type="button" class="btn btn-tumblr waves-effect waves-light">
                                            <span class="btn-label"><i class="fa fa-tumblr"></i> </span>Tumblr
                                        </button>

                                        <button type="button" class="btn btn-skype waves-effect waves-light">
                                            <span class="btn-label"><i class="fa fa-skype"></i> </span>Skype
                                        </button>

                                        <button type="button" class="btn btn-youtube waves-effect waves-light">
                                            <span class="btn-label"><i class="fa fa-youtube"></i> </span>Youtube
                                        </button>

                                        <button type="button" class="btn btn-github waves-effect waves-light">
                                            <span class="btn-label"><i class="fa fa-github"></i> </span>Github
                                        </button>

                                    </div>

                                </div>

                                <div class="col-md-6 m-t-20">
                                    <h4 class="header-title m-t-0">Social buttons</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Use class <code>.btn-@yoursocial</code> to the parent.
                                    </p>

                                    <div class="button-list">
                                        <button type="button" class="btn btn-facebook waves-effect waves-light">
                                            <i class="fa fa-facebook"></i>
                                        </button>

                                        <button type="button" class="btn btn-twitter waves-effect waves-light">
                                            <i class="fa fa-twitter"></i>
                                        </button>

                                        <button type="button" class="btn btn-linkedin waves-effect waves-light">
                                            <i class="fa fa-linkedin"></i>
                                        </button>

                                        <button type="button" class="btn btn-dribbble waves-effect waves-light">
                                            <i class="fa fa-dribbble"></i>
                                        </button>

                                        <button type="button" class="btn btn-googleplus waves-effect waves-light">
                                            <i class="fa fa-google-plus"></i>
                                        </button>

                                        <button type="button" class="btn btn-instagram waves-effect waves-light">
                                            <i class="fa fa-instagram"></i>
                                        </button>

                                        <button type="button" class="btn btn-pinterest waves-effect waves-light">
                                            <i class="fa fa-pinterest"></i>
                                        </button>

                                        <button type="button" class="btn btn-dropbox waves-effect waves-light">
                                            <i class="fa fa-dropbox"></i>
                                        </button>

                                        <button type="button" class="btn btn-flickr waves-effect waves-light">
                                            <i class="fa fa-flickr"></i>
                                        </button>

                                        <button type="button" class="btn btn-tumblr waves-effect waves-light">
                                            <i class="fa fa-tumblr"></i>
                                        </button>

                                        <button type="button" class="btn btn-skype waves-effect waves-light">
                                            <i class="fa fa-skype"></i>
                                        </button>

                                        <button type="button" class="btn btn-youtube waves-effect waves-light">
                                            <i class="fa fa-youtube"></i>
                                        </button>

                                        <button type="button" class="btn btn-github waves-effect waves-light">
                                            <i class="fa fa-github"></i>
                                        </button>


                                        <br>


                                        <button type="button" class="btn btn-facebook waves-effect waves-light">
                                            <i class="fa fa-facebook m-r-5"></i> Facebook
                                        </button>

                                        <button type="button" class="btn btn-twitter waves-effect waves-light">
                                            <i class="fa fa-twitter m-r-5"></i> Twitter
                                        </button>

                                        <button type="button" class="btn btn-linkedin waves-effect waves-light">
                                            <i class="fa fa-linkedin m-r-5"></i> Linkedin
                                        </button>

                                        <button type="button" class="btn btn-dribbble waves-effect waves-light">
                                            <i class="fa fa-dribbble m-r-5"></i> Dribbble
                                        </button>

                                        <button type="button" class="btn btn-googleplus waves-effect waves-light">
                                            <i class="fa fa-google-plus m-r-5"></i> Google+
                                        </button>

                                        <button type="button" class="btn btn-instagram waves-effect waves-light">
                                            <i class="fa fa-instagram m-r-5"></i> Instagram
                                        </button>

                                        <button type="button" class="btn btn-pinterest waves-effect waves-light">
                                            <i class="fa fa-pinterest m-r-5"></i> Pinterest
                                        </button>

                                        <button type="button" class="btn btn-dropbox waves-effect waves-light">
                                            <i class="fa fa-dropbox m-r-5"></i> Dropbox
                                        </button>

                                        <button type="button" class="btn btn-flickr waves-effect waves-light">
                                            <i class="fa fa-flickr m-r-5"></i> Flickr
                                        </button>

                                        <button type="button" class="btn btn-tumblr waves-effect waves-light">
                                            <i class="fa fa-tumblr m-r-5"></i> Tumblr
                                        </button>

                                        <button type="button" class="btn btn-skype waves-effect waves-light">
                                            <i class="fa fa-skype m-r-5"></i> Skype
                                        </button>

                                        <button type="button" class="btn btn-youtube waves-effect waves-light">
                                            <i class="fa fa-youtube m-r-5"></i> Youtube
                                        </button>

                                        <button type="button" class="btn btn-github waves-effect waves-light">
                                            <i class="fa fa-github m-r-5"></i> Github
                                        </button>
                                    </div>

                                </div>
                            </div><!-- end row -->

                            <div class="row m-t-50">
                                <div class="col-md-6 m-t-20">
                                    <h4 class="header-title m-t-0">Button group</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.
                                    </p>

                                    <div class="btn-group m-b-20">
                                        <button type="button" class="btn btn-secondary waves-effect">Left</button>
                                        <button type="button" class="btn btn-secondary waves-effect">Middle</button>
                                        <button type="button" class="btn btn-secondary waves-effect">Right</button>
                                    </div>
                                    <br>

                                    <div class="btn-group m-b-20">
                                        <button type="button" class="btn btn-secondary waves-effect">1</button>
                                        <button type="button" class="btn btn-secondary waves-effect">2</button>
                                        <button type="button" class="btn btn-secondary waves-effect">3</button>
                                        <button type="button" class="btn btn-secondary waves-effect">4</button>
                                    </div>
                                    <div class="btn-group m-b-20">
                                        <button type="button" class="btn btn-secondary waves-effect">5</button>
                                        <button type="button" class="btn btn-secondary waves-effect">6</button>
                                        <button type="button" class="btn btn-secondary waves-effect">7</button>
                                    </div>
                                    <div class="btn-group m-b-20">
                                        <button type="button" class="btn btn-secondary waves-effect">8</button>
                                    </div>
                                    <br>
                                    <div class="btn-group m-b-20">
                                        <button type="button" class="btn btn-secondary waves-effect">1</button>
                                        <button type="button" class="btn btn-secondary waves-effect">2</button>
                                        <button type="button" class="btn btn-secondary waves-effect">3</button>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle  waves-effect" data-toggle="dropdown" aria-expanded="false"> Dropdown <span class="caret"></span> </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="btn-group-vertical m-b-20">
                                                <button type="button" class="btn btn-secondary waves-effect">Top</button>
                                                <button type="button" class="btn btn-secondary waves-effect">Middle</button>
                                                <button type="button" class="btn btn-secondary waves-effect">Bottom</button>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="btn-group-vertical m-b-20">
                                                <button type="button" class="btn btn-secondary waves-effect">Button 1</button>
                                                <button type="button" class="btn btn-secondary waves-effect">Button 2</button>
                                                <button type="button" class="btn btn-secondary dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"> Button 3 <span class="caret"></span> </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6 m-t-20">
                                    <h4 class="header-title m-t-0">Button plugin</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Do more with buttons. Control button states or create groups of buttons for more components like toolbars.
                                    </p>

                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="button"
                                            aria-pressed="false" autocomplete="off">
                                        Single toggle
                                    </button>

                                    <br><br>

                                    <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-primary waves-effect waves-light active">
                                            <input type="checkbox" checked autocomplete="off"> Checkbox 1
                                            (pre-checked)
                                        </label>
                                        <label class="btn btn-primary waves-effect waves-light">
                                            <input type="checkbox" autocomplete="off"> Checkbox 2
                                        </label>
                                        <label class="btn btn-primary waves-effect waves-light">
                                            <input type="checkbox" autocomplete="off"> Checkbox 3
                                        </label>
                                    </div>

                                    <br><br>

                                    <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-primary waves-effect waves-light active">
                                            <input type="radio" name="options" id="option1" autocomplete="off"
                                                   checked> Radio 1 (preselected)
                                        </label>
                                        <label class="btn btn-primary waves-effect waves-light">
                                            <input type="radio" name="options" id="option2" autocomplete="off">
                                            Radio 2
                                        </label>
                                        <label class="btn btn-primary waves-effect waves-light">
                                            <input type="radio" name="options" id="option3" autocomplete="off">
                                            Radio 3
                                        </label>
                                    </div>

                                </div>

                            </div> <!-- end row -->

                        </div>
                    </div>

                </div>
                <!-- End of Row -->

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
