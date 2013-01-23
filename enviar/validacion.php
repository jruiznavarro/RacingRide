<?php
include ('../usuarios/conectaBaseDeDatos.php');
conectaWeb();

$nombree = htmlspecialchars($_GET['nombree']);


$consulta_usuario = mysql_query("update USUARIOS SET Validacion=true
where nombre='".$nombree."'");


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
