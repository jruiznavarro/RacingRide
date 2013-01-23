<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?
session_start();


?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Racing Ride</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="../css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link href="../css/bootstrap-responsive.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="../ico/favicon.png">
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/funciones.js"></script>

    </head>
    <body>

        <div class="navbar navbar-inverse navbar-fixed-top"> <!-- Barra de navegación superior -->
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="http://www.racingride.es">Racing Ride</a> <!-- Nombre y enlace a la página -->
                    <div class="nav-collapse collapse">

                        <form class="navbar-form pull-right" action="../enviar/login.php" method="post">  <!-- Formulario para el login -->
                            <input class="span2" type="text" placeholder="Usuario" name="txt_user">
                            <input class="span2" type="password" placeholder="Contraseña" name="txt_pass">
                            <button type="submit" class="btn" >Entrar</button>
                        </form>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">

            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit"> <!-- Contenedor gris -->
                <h1><?echo'Lo sentimos,',$_SESSION['user']?></h1>
                <p>No ha validado su registro, por favor revise su correo y validese como usuario.</p>
                <p>Si no le ha llegado el e-mail, pulse aquí y le reenviaremos el e-mail.</p>
                <form action="../enviar/reenvio.php" method="post">
                    <input type="submit" name="Enviar" class="btn btn-primary btn-large" value="Enviar"/>
                    
                </form>
                
            </div>

            <hr>

            <footer>
                <p>&copy; 2012 Company, Inc.  
                    &middot; <a href="#privacidadModal" data-toggle="modal">Privacy</a> 
                    &middot; <a href="#terminosModal" data-toggle="modal">Terms</a>
                    &middot; <a href="#contactoModal" data-toggle="modal">Contacto</a>
                    &middot; <a href="#faqsModal" data-toggle="modal">FAQ'S</a>

                </p>
            </footer>

        </div> <!-- /container -->

    </body>
</html>
