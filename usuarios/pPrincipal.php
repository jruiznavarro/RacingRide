<?
session_start();
if ($_SESSION['user'] != "") {
    echo '
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
            
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          
            <a class="brand" href="http://www.racingride.es">Racing Ride</a>
            
          <div class="nav-collapse collapse">
            <form class="navbar-form pull-right" action="../enviar/salir.php" method="post">
              <p>Hola ' . $_SESSION['user'] . ' 
              <button type="submit" class="btn" >Cerrar Sesión</button></p>
            </form>
            <ul class="nav">
            
              <li class="active"><a href="../usuarios/pPrincipal.php">Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi Cuadra <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="../caballos/misCaballos.php">Mis Caballos</a></li>
                  <li><a href="../caballos/entrenamiento.php">Entrenamiento</a></li>
                  <li><a href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Comercio <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="divider"></li>
                  <li class="nav-header">Venta</li>
                  <li><a href="../comercio/comprarCaballo.php">Comprar caballo</a></li>
                  <li><a href="../comercio/venderCaballo.php">Vender caballo</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Subasta</li>
                  <li><a href="../comercio/buscarSubastaCaballo.php">Buscar caballo</a></li>
                  <li><a href="../comercio/ponerSubastaCaballo.php">Poner caballo en subasta</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cría <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="../caballos/caballoGratuito.php">Caballo gratuito</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Mis caballos</li>
                  <li><a href="../caballos/sementales.php">Sementales</a></li>
                  <li><a href="../caballos/yeguas.php">Yeguas</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Carreras <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="../carrerasYApuestas/inscripcionCarreras.php">Inscripción</a></li>
                  <li><a href="../carrerasYApuestas/calendarioCarreras.php">Calendario</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Apuestas <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="../carrerasYApuestas/realizarApuestas.php">Realizar apuesta</a></li>
                  <li><a href="../carrerasYApuestas/misApuestas.php">Mis apuestas</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Estadísticas <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="../rankingsYCuentas/rankingUsuarios.php">Usuarios</a></li>
                  <li><a href="../rankingsYCuentas/rankingCaballos.php">Caballos</a></li>
                </ul>
              </li>
              <li><a href="../rankingsYCuentas/cuentaPlus.php">Plus</a></li>
              <li>
                <form class="form-search" action="../enviar/busqueda.php">
                    <input type="text" class="input-small search-query">
                    <button type="submit" class="btn">Search</button>
                </form>
               </li>
            </ul>
              
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    


    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Hola ' . $_SESSION['user'] . ' esta es tu Cuadra</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-large" href="../usuarios/registro.php">Registrate!</a></p>
      </div>

      <!-- Example row of columns --> 
      <div class="row">
        <div class="span4">
          <h2>Cría</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#criaModal" data-toggle="modal">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Corre</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#correModal" data-toggle="modal">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Apuesta</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#apuestaModal" data-toggle="modal">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
      <p>&copy; 2012 Company, Inc.  
                    &middot; <a href="#privacidadModal" data-toggle="modal">Privacy</a> 
                    &middot; <a href="#terminosModal" data-toggle="modal">Terms</a>
                    &middot; <a href="#contactoModal" data-toggle="modal">Contacto</a>
                    &middot; <a href="#faqsModal" data-toggle="modal">FAQS</a>

      </p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
        <div id="privacidadModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Privacidad</h3>
            </div>
            <div class="modal-body">
                <p>Esta es la ventana modal de privacidad</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>

        <div id="terminosModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Términos</h3>
            </div>
            <div class="modal-body">
                <p>Esta es la ventana modal de términos</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>

        <div id="contactoModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Contácta con nosotros</h3>
            </div>
            <div class="modal-body">
                <form action="../enviar/envioMensaje.php" method="post">

                    <input type="text" name="nombre" placeholder="Nombre"/><br>
                    <input type="text" name="apellido" placeholder="Apellido"/><br>
                    <input type="text" name="correo" placeholder="Correo electrónico"/><br>
                    <textarea rows="5" cols="40" name="problema" placeholder="Comentario"></textarea><br>
                    <input type="submit" name="Enviar" value="Enviar"/>
                    <input type="reset" name="Reset" value="Reset"/>

                </form>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>
        
        <div id="faqsModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Privacidad</h3>
            </div>
            <div class="modal-body">
                <p>Esta es la ventana modal de privacidad</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>

        <div id="criaModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Privacidad</h3>
            </div>
            <div class="modal-body">
                <p>Esta es la ventana modal de privacidad</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>

        <div id="correModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Privacidad</h3>
            </div>
            <div class="modal-body">
                <p>Esta es la ventana modal de privacidad</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>

        <div id="apuestaModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Privacidad</h3>
            </div>
            <div class="modal-body">
                <p>Esta es la ventana modal de privacidad</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>   

  </body>
</html>
';
} else {
    echo require 'loginFallido.php';
}
?>