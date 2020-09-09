<?php
include("baseDatos.php");
include("querys.php");

$centro=(int)$_POST['centro'];
$numeroFicha=(int)$_POST['ficha'];




if (isset($_POST['centro']) AND isset($_POST['ficha'])) {



$tabla="fichas (numero_ficha, id_centro)";
$values="$numeroFicha, $centro";

$consulta=insertar($mysqli, $tabla, $values);

header("Location:../crearFicha.php");
	
}else{
	echo "nada";
}




?>