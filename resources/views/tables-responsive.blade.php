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

        <!-- Responsive table css -->
        <link href="assets/plugins/responsive-table/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">

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
                        <h4 class="page-title">Responsive Table</h4>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">

                            <div class="table-rep-plugin">
                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table table-striped table-bordered">
                                        <thead class="thead-default">
                                        <tr>
                                            <th>Company</th>
                                            <th data-priority="1">Last Trade</th>
                                            <th data-priority="3">Trade Time</th>
                                            <th data-priority="1">Change</th>
                                            <th data-priority="3">Prev Close</th>
                                            <th data-priority="3">Open</th>
                                            <th data-priority="6">Bid</th>
                                            <th data-priority="6">Ask</th>
                                            <th data-priority="6">1y Target Est</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                                            <td>597.74</td>
                                            <td>12:12PM</td>
                                            <td>14.81 (2.54%)</td>
                                            <td>582.93</td>
                                            <td>597.95</td>
                                            <td>597.73 x 100</td>
                                            <td>597.91 x 300</td>
                                            <td>731.10</td>
                                        </tr>
                                        <tr>
                                            <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                            <td>378.94</td>
                                            <td>12:22PM</td>
                                            <td>5.74 (1.54%)</td>
                                            <td>373.20</td>
                                            <td>381.02</td>
                                            <td>378.92 x 300</td>
                                            <td>378.99 x 100</td>
                                            <td>505.94</td>
                                        </tr>
                                        <tr>
                                            <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                            <td>191.55</td>
                                            <td>12:23PM</td>
                                            <td>3.16 (1.68%)</td>
                                            <td>188.39</td>
                                            <td>194.99</td>
                                            <td>191.52 x 300</td>
                                            <td>191.58 x 100</td>
                                            <td>240.32</td>
                                        </tr>
                                        <tr>
                                            <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                            <td>31.15</td>
                                            <td>12:44PM</td>
                                            <td>1.41 (4.72%)</td>
                                            <td>29.74</td>
                                            <td>30.67</td>
                                            <td>31.14 x 6500</td>
                                            <td>31.15 x 3200</td>
                                            <td>36.11</td>
                                        </tr>
                                        <tr>
                                            <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                            <td>25.50</td>
                                            <td>12:27PM</td>
                                            <td>0.66 (2.67%)</td>
                                            <td>24.84</td>
                                            <td>25.37</td>
                                            <td>25.50 x 71100</td>
                                            <td>25.51 x 17800</td>
                                            <td>31.50</td>
                                        </tr>
                                        <tr>
                                            <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                            <td>18.65</td>
                                            <td>12:45PM</td>
                                            <td>0.97 (5.49%)</td>
                                            <td>17.68</td>
                                            <td>18.23</td>
                                            <td>18.65 x 10300</td>
                                            <td>18.66 x 24000</td>
                                            <td>21.12</td>
                                        </tr>
                                        <tr>
                                            <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                            <td>15.81</td>
                                            <td>12:25PM</td>
                                            <td>0.11 (0.67%)</td>
                                            <td>15.70</td>
                                            <td>15.94</td>
                                            <td>15.79 x 6100</td>
                                            <td>15.80 x 17000</td>
                                            <td>18.16</td>
                                        </tr>
                                        <!-- Repeat -->
                                        <tr>
                                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                                            <td>597.74</td>
                                            <td>12:12PM</td>
                                            <td>14.81 (2.54%)</td>
                                            <td>582.93</td>
                                            <td>597.95</td>
                                            <td>597.73 x 100</td>
                                            <td>597.91 x 300</td>
                                            <td>731.10</td>
                                        </tr>
                                        <tr>
                                            <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                            <td>378.94</td>
                                            <td>12:22PM</td>
                                            <td>5.74 (1.54%)</td>
                                            <td>373.20</td>
                                            <td>381.02</td>
                                            <td>378.92 x 300</td>
                                            <td>378.99 x 100</td>
                                            <td>505.94</td>
                                        </tr>
                                        <tr>
                                            <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                            <td>191.55</td>
                                            <td>12:23PM</td>
                                            <td>3.16 (1.68%)</td>
                                            <td>188.39</td>
                                            <td>194.99</td>
                                            <td>191.52 x 300</td>
                                            <td>191.58 x 100</td>
                                            <td>240.32</td>
                                        </tr>
                                        <tr>
                                            <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                            <td>31.15</td>
                                            <td>12:44PM</td>
                                            <td>1.41 (4.72%)</td>
                                            <td>29.74</td>
                                            <td>30.67</td>
                                            <td>31.14 x 6500</td>
                                            <td>31.15 x 3200</td>
                                            <td>36.11</td>
                                        </tr>
                                        <tr>
                                            <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                            <td>25.50</td>
                                            <td>12:27PM</td>
                                            <td>0.66 (2.67%)</td>
                                            <td>24.84</td>
                                            <td>25.37</td>
                                            <td>25.50 x 71100</td>
                                            <td>25.51 x 17800</td>
                                            <td>31.50</td>
                                        </tr>
                                        <tr>
                                            <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                            <td>18.65</td>
                                            <td>12:45PM</td>
                                            <td>0.97 (5.49%)</td>
                                            <td>17.68</td>
                                            <td>18.23</td>
                                            <td>18.65 x 10300</td>
                                            <td>18.66 x 24000</td>
                                            <td>21.12</td>
                                        </tr>
                                        <tr>
                                            <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                            <td>15.81</td>
                                            <td>12:25PM</td>
                                            <td>0.11 (0.67%)</td>
                                            <td>15.70</td>
                                            <td>15.94</td>
                                            <td>15.79 x 6100</td>
                                            <td>15.80 x 17000</td>
                                            <td>18.16</td>
                                        </tr>
                                        <!-- Repeat -->
                                        <tr>
                                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                                            <td>597.74</td>
                                            <td>12:12PM</td>
                                            <td>14.81 (2.54%)</td>
                                            <td>582.93</td>
                                            <td>597.95</td>
                                            <td>597.73 x 100</td>
                                            <td>597.91 x 300</td>
                                            <td>731.10</td>
                                        </tr>
                                        <tr>
                                            <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                            <td>378.94</td>
                                            <td>12:22PM</td>
                                            <td>5.74 (1.54%)</td>
                                            <td>373.20</td>
                                            <td>381.02</td>
                                            <td>378.92 x 300</td>
                                            <td>378.99 x 100</td>
                                            <td>505.94</td>
                                        </tr>
                                        <tr>
                                            <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                            <td>191.55</td>
                                            <td>12:23PM</td>
                                            <td>3.16 (1.68%)</td>
                                            <td>188.39</td>
                                            <td>194.99</td>
                                            <td>191.52 x 300</td>
                                            <td>191.58 x 100</td>
                                            <td>240.32</td>
                                        </tr>
                                        <tr>
                                            <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                            <td>31.15</td>
                                            <td>12:44PM</td>
                                            <td>1.41 (4.72%)</td>
                                            <td>29.74</td>
                                            <td>30.67</td>
                                            <td>31.14 x 6500</td>
                                            <td>31.15 x 3200</td>
                                            <td>36.11</td>
                                        </tr>
                                        <tr>
                                            <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                            <td>25.50</td>
                                            <td>12:27PM</td>
                                            <td>0.66 (2.67%)</td>
                                            <td>24.84</td>
                                            <td>25.37</td>
                                            <td>25.50 x 71100</td>
                                            <td>25.51 x 17800</td>
                                            <td>31.50</td>
                                        </tr>
                                        <tr>
                                            <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                            <td>18.65</td>
                                            <td>12:45PM</td>
                                            <td>0.97 (5.49%)</td>
                                            <td>17.68</td>
                                            <td>18.23</td>
                                            <td>18.65 x 10300</td>
                                            <td>18.66 x 24000</td>
                                            <td>21.12</td>
                                        </tr>
                                        <tr>
                                            <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                            <td>15.81</td>
                                            <td>12:25PM</td>
                                            <td>0.11 (0.67%)</td>
                                            <td>15.70</td>
                                            <td>15.94</td>
                                            <td>15.79 x 6100</td>
                                            <td>15.80 x 17000</td>
                                            <td>18.16</td>
                                        </tr>
                                        <!-- Repeat -->
                                        <tr>
                                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                                            <td>597.74</td>
                                            <td>12:12PM</td>
                                            <td>14.81 (2.54%)</td>
                                            <td>582.93</td>
                                            <td>597.95</td>
                                            <td>597.73 x 100</td>
                                            <td>597.91 x 300</td>
                                            <td>731.10</td>
                                        </tr>
                                        <tr>
                                            <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                            <td>378.94</td>
                                            <td>12:22PM</td>
                                            <td>5.74 (1.54%)</td>
                                            <td>373.20</td>
                                            <td>381.02</td>
                                            <td>378.92 x 300</td>
                                            <td>378.99 x 100</td>
                                            <td>505.94</td>
                                        </tr>
                                        <tr>
                                            <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                            <td>191.55</td>
                                            <td>12:23PM</td>
                                            <td>3.16 (1.68%)</td>
                                            <td>188.39</td>
                                            <td>194.99</td>
                                            <td>191.52 x 300</td>
                                            <td>191.58 x 100</td>
                                            <td>240.32</td>
                                        </tr>
                                        <tr>
                                            <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                            <td>31.15</td>
                                            <td>12:44PM</td>
                                            <td>1.41 (4.72%)</td>
                                            <td>29.74</td>
                                            <td>30.67</td>
                                            <td>31.14 x 6500</td>
                                            <td>31.15 x 3200</td>
                                            <td>36.11</td>
                                        </tr>
                                        <tr>
                                            <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                            <td>25.50</td>
                                            <td>12:27PM</td>
                                            <td>0.66 (2.67%)</td>
                                            <td>24.84</td>
                                            <td>25.37</td>
                                            <td>25.50 x 71100</td>
                                            <td>25.51 x 17800</td>
                                            <td>31.50</td>
                                        </tr>
                                        <tr>
                                            <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                            <td>18.65</td>
                                            <td>12:45PM</td>
                                            <td>0.97 (5.49%)</td>
                                            <td>17.68</td>
                                            <td>18.23</td>
                                            <td>18.65 x 10300</td>
                                            <td>18.66 x 24000</td>
                                            <td>21.12</td>
                                        </tr>
                                        <tr>
                                            <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                            <td>15.81</td>
                                            <td>12:25PM</td>
                                            <td>0.11 (0.67%)</td>
                                            <td>15.70</td>
                                            <td>15.94</td>
                                            <td>15.79 x 6100</td>
                                            <td>15.80 x 17000</td>
                                            <td>18.16</td>
                                        </tr>
                                        <!-- Repeat -->
                                        <tr>
                                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                                            <td>597.74</td>
                                            <td>12:12PM</td>
                                            <td>14.81 (2.54%)</td>
                                            <td>582.93</td>
                                            <td>597.95</td>
                                            <td>597.73 x 100</td>
                                            <td>597.91 x 300</td>
                                            <td>731.10</td>
                                        </tr>
                                        <tr>
                                            <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                            <td>378.94</td>
                                            <td>12:22PM</td>
                                            <td>5.74 (1.54%)</td>
                                            <td>373.20</td>
                                            <td>381.02</td>
                                            <td>378.92 x 300</td>
                                            <td>378.99 x 100</td>
                                            <td>505.94</td>
                                        </tr>
                                        <tr>
                                            <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                            <td>191.55</td>
                                            <td>12:23PM</td>
                                            <td>3.16 (1.68%)</td>
                                            <td>188.39</td>
                                            <td>194.99</td>
                                            <td>191.52 x 300</td>
                                            <td>191.58 x 100</td>
                                            <td>240.32</td>
                                        </tr>
                                        <tr>
                                            <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                            <td>31.15</td>
                                            <td>12:44PM</td>
                                            <td>1.41 (4.72%)</td>
                                            <td>29.74</td>
                                            <td>30.67</td>
                                            <td>31.14 x 6500</td>
                                            <td>31.15 x 3200</td>
                                            <td>36.11</td>
                                        </tr>
                                        <tr>
                                            <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                            <td>25.50</td>
                                            <td>12:27PM</td>
                                            <td>0.66 (2.67%)</td>
                                            <td>24.84</td>
                                            <td>25.37</td>
                                            <td>25.50 x 71100</td>
                                            <td>25.51 x 17800</td>
                                            <td>31.50</td>
                                        </tr>
                                        <tr>
                                            <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                            <td>18.65</td>
                                            <td>12:45PM</td>
                                            <td>0.97 (5.49%)</td>
                                            <td>17.68</td>
                                            <td>18.23</td>
                                            <td>18.65 x 10300</td>
                                            <td>18.66 x 24000</td>
                                            <td>21.12</td>
                                        </tr>
                                        <tr>
                                            <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                            <td>15.81</td>
                                            <td>12:25PM</td>
                                            <td>0.11 (0.67%)</td>
                                            <td>15.70</td>
                                            <td>15.94</td>
                                            <td>15.79 x 6100</td>
                                            <td>15.80 x 17000</td>
                                            <td>18.16</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- end row -->


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

        <!-- responsive-table-->
        <script src="assets/plugins/responsive-table/js/rwd-table.min.js" type="text/javascript"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $('.table-rep-plugin').responsiveTable('update');
        </script>

    </body>
</html>
