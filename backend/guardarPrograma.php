<?php
include("baseDatos.php");
// error_reporting(0);

include("querys.php");

// Recibo las variables de la vista index.php por método POST


if (isset    ($_POST['idFicha'])  ) {


	$ficha=(int)$_POST['idFicha'];
	$programa=$_POST['namePrograma'];


$tabla="programa (nombre_prog, id_ficha)";
$values="'$programa', $ficha";

$consulta=insertar($mysqli, $tabla, $values);

$a="ok";

header("Location:../crearPrograma.php");
	
}




?>