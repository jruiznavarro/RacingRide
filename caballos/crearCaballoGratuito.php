<?
session_start();
include_once ('../usuarios/conectaBaseDeDatos.php');
conectaWeb();
$nombre_caballo = $_POST['nombreCaballo'];
$velocidad = rand(1, 10);
$resistencia = rand(1, 10);
$agilidad = rand(1, 10);
$obediencia = rand(1, 10);

$num_cab_gra = htmlspecialchars($_GET['ncg']);

$nom_cua = htmlspecialchars($_GET['nc']);

if($num_cab_gra > 0){
    $consulta_crea_caballo_gratuito = mysql_query("INSERT INTO CABALLOS (nombre_caballo, sexo, velocidad, resistencia, agilidad, obediencia, nombre_cuadra)
        VALUES ('$nombre_caballo', 'macho', $velocidad, $resistencia, $agilidad, $obediencia,'$nom_cua' )");
    $resta_cab_gratuito = mysql_query("UPDATE CUADRAS SET num_caballos_gratis = num_caballos_gratis - 1 WHERE nombre_cuadra = '$nom_cua'");
    echo require '../caballos/caballoGratuito.php';
    
}else {
    echo require '../caballos/caballoGratuito.php';
       
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
