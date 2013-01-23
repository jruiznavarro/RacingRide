<?php

$nombre_contacto = $_POST['nombre'];
$apellido_contacto = $_POST['apellido'];
$correo_contacto = $_POST['correo'];
$problema_contacto = $_POST['problema'];



$header = 'From: support@racingride.es';
//$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
//$header .= "Mime-Version: 1.0 \r\n"; 
//$header .= "Content-Type: text/plain"; 

$mensaje = "Este mensaje fue enviado por " . $nombre_contacto . " \r\n";
$mensaje .= " " . $apellido_contacto . " \r\n";
$mensaje .= "Su e-mail es: " . $correo_contacto . " \r\n"; 
$mensaje .= "Su consulta es: " . $problema_contacto . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = 'support@racingride.es';
$asunto= 'Support Racing Ride';


mail($para, $asunto, $mensaje, $header);

echo 'mensaje enviado';
echo require 'index.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
