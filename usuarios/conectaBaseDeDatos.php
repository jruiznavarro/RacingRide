<?php
session_start();
function conectaWeb(){
    $server = 'db450028469.db.1and1.com'; //nombre servidor
    $username = 'dbo450028469'; //Usuario
    $password = 'prueba1'; //contraseña de la BBDD
    $conexion = mysql_connect($server,$username,$password)
            or die('ha habido algun error'.  mysql_error());
    mysql_select_db('db450028469'); //Seleccion de la BBDD
    mysql_query("SET NAMES utf8"); //
    
}

?>
