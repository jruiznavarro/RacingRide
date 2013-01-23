<?php

include ('../usuarios/conectaBaseDeDatos.php');
conectaWeb();
session_start();

$nombre_usuario = $_POST['txt_user'];
$password = $_POST['txt_pass'];

$consulta_usuario = mysql_query("SELECT * FROM USUARIOS WHERE user = '$nombre_usuario'");
$consulta_validacion = mysql_query("SELECT * FROM PRUEBA p, USUARIOS u WHERE u.user = '$nombre_usuario' AND u.email= p.iden_correo AND p.pass = '$password'");
$consulta_correo = mysql_query("SELECT * FROM USUARIOS WHERE user='$nombre_usuario'");
$estaValidado = mysql_query("SELECT * FROM USUARIOS WHERE user = '$nombre_usuario' && validacion = true");
$consulta_caballos = mysql_query("SELECT * FROM CABALLOS c, USUARIOS u WHERE c.nombre_cuadra = u.nombre_cuadra AND user = '$nombre_usuario'");


$numero_filas_usuario = mysql_num_rows($consulta_usuario);
$numero_filas_validacion = mysql_num_rows($consulta_validacion);
$datos_usuario_array = mysql_fetch_array($consulta_correo);
$numero_filas_validado = mysql_num_rows($estaValidado);
$numero_filas_caballos = mysql_num_rows($consulta_caballos);


$_SESSION['user'] = $nombre_usuario;
$_SESSION['nombre_usuario'] = $datos_usuario_array[1];
$_SESSION['correo_usuario'] = $datos_usuario_array[5];

if($nombre_usuario != "" && $numero_filas_usuario > 0 && $numero_filas_validacion > 0){
        if($numero_filas_validado > 0){
	
	if($numero_filas_caballos > 0){
		for($i = 0; $i < $numero_filas_caballos; $i++){
	$numero_celdas_caballos = mysql_fetch_array($consulta_caballos);
	
	$nombre_caballo = $numero_celdas_caballos['nombre_caballo'];
	$velocidad_caballo = $numero_celdas_caballos['velocidad'];
	
	echo $nombre_caballo;
	echo $velocidad_caballo;
}
}
           echo require '../usuarios/pPrincipal.php'; 
        } else{
            echo require '../usuarios/noEstaValidado.php';
}
}  else {
    echo require '../usuarios/loginFallido.php';
}

?>
