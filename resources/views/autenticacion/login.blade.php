<!doctype html>
<html class="no-js" lang="">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Control De Inventarios</title>
        <link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="css/vendor/animate.css">
        <link rel="stylesheet" href="css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="js/vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" href="css/login.css">
        <script src="js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    </head>
    <body id="minovate" class="appWrapper">
        <div id="wrap" class="animsition">
            <div class="page page-core page-login">
                <div class="text-center"><h3 class="text-light text-white"><span class="text-lightred">M</span>I <span class="text-lightred">I</span>NVENTARIO</h3></div>
                <div class="container w-420 p-15 bg-white mt-40 text-center">
                    <h2 class="text-light text-greensea">INGRESAR</h2>

                    <form name="form" class="form-validation mt-20" action="/login" method="post">
                      {{ csrf_field() }}
                        <div class="form-group">
                            <input type="" class="form-control underline-input" placeholder="Nombre de usuario" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Contraseña" class="form-control underline-input" name="password" id="password">
                        </div>
                        <div class="form-group text-left mt-20">
                            <button class="btn btn-greensea b-0 br-2 mr-5" name="login-form-submit" value="">Iniciar</button>
                        </div>
                    </form>

                    <hr>
                </div>

            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap/bootstrap.min.js"></script>
        <script src="js/vendor/jRespond/jRespond.min.js"></script>
        <script src="js/vendor/animsition/js/jquery.animsition.min.js"></script>
        <script src="js/main.js"></script>

        <script>
            $(window).load(function(){
            });
        </script>
    </body>
</html>
