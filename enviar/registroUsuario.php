<?php

include ('../usuarios/conectaBaseDeDatos.php');
conectaWeb();
session_start();
$nombre_usuario = $_POST['txt_user'];
$password = $_POST['txt_pass'];
$password2 = $_POST['txt_pass2'];
$nombre = $_POST['txt_nombre'];
$ap1 = $_POST['txt_ap1'];
$ap2 = $_POST['txt_ap2'];
$correo = $_POST['txt_correo'];
$fecha = $_POST['txt_fecha'];
$nombre_cuadra = $_POST['txt_nombre_cuadra'];
$colores_cuadra = $_POST['txt_colores_cuadra'];
$_SESSION['pass'] = $password;


$validado = 0;
$ok = FALSE;
$ok2 = FALSE;


$nombre_usuario_bbdd = mysql_query("SELECT *
                                 FROM USUARIOS
                                 WHERE user = '$nombre_usuario'");
$correo_bbdd = mysql_query("SELECT *
                                 FROM USUARIOS
                                 WHERE email = '$correo'");
$nombre_cuadra_bbdd = mysql_query("SELECT *
                                 FROM USUARIOS
                                 WHERE nombre_cuadra = '$nombre_cuadra'");

$numero_filas_usuario = mysql_num_rows($nombre_usuario_bbdd);
$numero_filas_correo = mysql_num_rows($correo_bbdd);
$numero_filas_cuadra = mysql_num_rows($nombre_cuadra_bbdd);

if ($numero_filas_usuario > 0) {
    echo 'Nombre de usuario no valido';
    echo require '../usuarios/registro.php';
} else if ($numero_filas_correo > 0) {
    echo 'Correo no válido';
    echo require '../usuarios/registro.php';
} else if ($numero_filas_cuadra) {
    echo 'Nombre de la cuadra no valido';
    echo require '../usuarios/registro.php';
}else{
    $ok2 = TRUE;
}

if ($nombre != "") {
    if ($nombre_usuario != "") {
        if ($password != "") {
            if ($password2 != "") {
                $ok = TRUE;
            } else {
                echo 'No has rellenado el campo repite contraseña correctamente';
                echo require 'registro.php';
            }
        } else {
            echo 'No has rellenado el campo contraseña correctamente';
            echo require 'registro.php';
        }
    } else {
        echo 'No has rellenado el campo nombre usuario correctamente';
        echo require 'registro.php';
    }
} else {
    echo 'No has rellenado el campo nombre correctamente';
    echo require 'registro.php';
}

if ($ok && $ok2) {
    if (strlen($password) > 6 && strlen($password) < 12) {
        if ($password == $password2) {
            $consulta_usuario = mysql_query("INSERT INTO USUARIOS (nombre, apellido1, apellido2, user, email, fecha_nacimiento, nombre_cuadra, validacion) 
            VALUES ('$nombre','$ap1','$ap2','$nombre_usuario','$correo','$fecha','$nombre_cuadra',$validado)");
            $consulta = mysql_query("INSERT INTO PRUEBA (iden_correo, pass) VALUES ('$correo','$password')");
            $consulta_usuario = mysql_query("INSERT INTO CUADRAS (user, nombre_cuadra, colores_cuadra, num_caballos, num_caballos_gratis, dinero) 
            VALUES ('$nombre_usuario','$nombre_cuadra','$colores_cuadra',0,4,4000)");
            
            $header = 'From: support@racingride.es';
//$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
//$header .= "Mime-Version: 1.0 \r\n"; 
//$header .= "Content-Type: text/plain"; 

            $mensaje = "Hola " . $nombre . " \r\n";
            $mensaje = "Sigue el enlace para validar tu cuenta: \r\n";
            $mensaje = "www.racingride.es/enviar/validacion.php?nombree=" . $nombre . "\r\n";

            $para = $correo;
            $asunto = 'Support Racing Ride';


            mail($para, $asunto, $mensaje, $header);
            $ok = FALSE;
            echo 'ok';
            echo require '../index.php';
        } else {
            echo 'La contraseña no es igual';
            echo require '../usuarios/registro.php';
        }
    } else {
        echo 'la contraseña tiene que tener entre 6 y 12 caracteres';
        echo require '../usuarios/registro.php';
    }
}
?>
