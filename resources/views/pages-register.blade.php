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
        <title>Registrarse</title>

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

        	<div class="account-bg">
                <div class="card-box mb-0">
                    <div class="text-center m-t-20">
                        <a href="index" class="logo">
                            <i class="zmdi zmdi-group-work icon-c-logo"></i>
                            <span>Clinica Dental</span>
                        </a>
                    </div>
                    <div class="m-t-10 p-20">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h6 class="text-muted text-uppercase m-b-0 m-t-0">Registro</h6>
                            </div>
                        </div>
                        <form class="m-t-20" method="post" action="registro">
                          {{ csrf_field() }}

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="email" name="email"required="" placeholder="Email">
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
                                    <input class="form-control" type="text" name="username" required="" placeholder="Username">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="password" name="password" required="" placeholder="Password">
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
                                  <select name="genero" class="form-control" placeholder="Genero">
                                     <option value="F" selected="selected">Femenino</option>
                                     <option value="M">Masculino</option>
                                   </select>
                              </div>
                            </div>




                            <!-- <div class="form-group row">
                                <div class="col-12">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox-signup" type="checkbox" checked="checked">
                                        <label for="checkbox-signup">Monto Cancelado</label>
                                    </div>
                                </div>
                            </div> -->

                            <div class="form-group row text-center m-t-10">
                                <div class="col-12">
                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Registrarse</button>
                                </div>
                            </div>

                            <!-- <div class="form-group row m-t-30 mb-0">
                                <div class="col-12 text-center">
                                    <h5 class="text-muted"><b>Sign Up with</b></h5>
                                </div>
                            </div> -->

                            <!-- <div class="form-group row mb-0 text-center">
                                <div class="col-12">
                                    <button type="button" class="btn btn-facebook font-14 waves-effect waves-light m-t-20">
                                       <i class="fa fa-facebook m-r-5"></i> Facebook
                                    </button>

                                    <button type="button" class="btn btn-twitter font-14 waves-effect waves-light m-t-20">
                                       <i class="fa fa-twitter m-r-5"></i> Twitter
                                    </button>

                                    <button type="button" class="btn btn-googleplus font-14 waves-effect waves-light m-t-20">
                                       <i class="fa fa-google-plus m-r-5"></i> Google+
                                    </button>
                                </div>
                            </div> -->


                        </form>

                    </div>
                </div>
            </div>
            <!-- end card-box-->

            <div class="m-t-20">
                <div class="text-center">
                    <p class="text-white">Ya tienes una cuenta? <a href="pages-login" class="text-white m-l-5"><b>Entrar</b> </a></p>
                </div>
            </div>

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
