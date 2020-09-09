<?php
include("baseDatos.php");
// error_reporting(0);

include("querys.php");

// Recibo las variables de la vista index.php por método POST

if (isset($_POST['centro'])) {
	$centro=$_POST['centro'];


$tabla="regional (nombre_regi)";
$values="'$centro'";

$consulta=insertar($mysqli, $tabla, $values);

$a="ok";

header("Location:../crearRegional.php");
	
}




?>