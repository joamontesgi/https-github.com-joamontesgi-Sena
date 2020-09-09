<?php
include("baseDatos.php");
include("querys.php");
$regionalID=$_POST['region'];
$centro=$_POST['centro'];





if (isset($_POST['centro'])) {
	$centro=$_POST['centro'];


$tabla="centro (nombre_cent, id_regi)";
$values="'$centro', '$regionalID'";

$consulta=insertar($mysqli, $tabla, $values);
var_dump($consulta);


header("Location:../crearCentro.php");
	
}




?>