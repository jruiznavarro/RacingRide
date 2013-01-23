<?php

session_start();


$header = 'From: support@racingride.es';
//$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
//$header .= "Mime-Version: 1.0 \r\n"; 
//$header .= "Content-Type: text/plain"; 

//$mensaje = "Hola, " . $_SESSION['user'] . " \r\n";

$mensaje = "www.racingride.es/validacion.php?nombree=".$_SESSION['nombre_usuario']."\r\n";

//$mensaje = "Enviado el " . date('d/m/Y', time()); 


$asunto= 'Support Racing Ride';


mail($_SESSION['correo_usuario'], $asunto, $mensaje, $header);

echo $_SESSION['user'];
echo 'mensaje enviado';
echo require 'index.php';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
