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
        <title>Login</title>

        <!-- Bootstrap CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <!-- Modernizr js -->
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
          @if(session('error'))
          <div class="aler alert-danger">
            {{ session('error') }}
          </div>
          @endif
        	<div class="account-bg">
                <div class="card-box mb-0">
                    <div class="text-center m-t-20">
                        <a href="index" class="logo">
                            <i class="zmdi zmdi-group-work icon-c-logo"></i>
                            <span>Uplon</span>
                        </a>
                    </div>
                    <div class="m-t-10 p-20">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h6 class="text-muted text-uppercase m-b-0 m-t-0">Login</h6>
                            </div>
                        </div>
                        <form class="m-t-20" action="login" method="post">
                              {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" name="email" id="email" required= placeholder="Username o email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="password" name="password" id="password" required placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="checkbox checkbox-custom">
                                        <input id="checkbox-signup" type="checkbox">
                                        <label for="checkbox-signup">
                                            Recordarme
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-10">
                                <div class="col-12">
                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Entrar</button>
                                </div>
                            </div>

                            <div class="form-group row m-t-30 mb-0">
                                <div class="col-12">
                                    <a href="pages-recoverpw" class="text-muted"><i class="fa fa-lock m-r-5"></i>olvidó su contraseña?</a>
                                </div>
                            </div>

                            <!-- <div class="form-group row m-t-30 mb-0">
                                <div class="col-12 text-center">
                                    <h5 class="text-muted"><b>Sign in with</b></h5>
                                </div>
                            </div>

                            <div class="form-group row mb-0 text-center">
                                <div class="col-12">
                                    <button type="button" class="btn btn-facebook waves-effect font-14 waves-light m-t-20">
                                       <i class="fa fa-facebook m-r-5"></i> Facebook
                                    </button>

                                    <button type="button" class="btn btn-twitter waves-effect font-14 waves-light m-t-20">
                                       <i class="fa fa-twitter m-r-5"></i> Twitter
                                    </button>

                                    <button type="button" class="btn btn-googleplus waves-effect font-14 waves-light m-t-20">
                                       <i class="fa fa-google-plus m-r-5"></i> Google+
                                    </button>
                                </div>
                            </div> -->

                        </form>

                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end card-box-->

            <!-- <div class="m-t-20">
                <div class="text-center">
                    <p class="text-white">Don't have an account? <a href="pages-register" class="text-white m-l-5"><b>Sign Up</b></a></p>
                </div>
            </div> -->

        </div>
        <!-- end wrapper page -->


        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script><!-- Tether for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
