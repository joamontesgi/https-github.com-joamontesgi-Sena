<?php
include("baseDatos.php");
include("querys.php");
$a=(int)$_POST['region'];
$nombreRegional=$_POST['nameRegion'];

$botonEliminar=$_POST['eliminar'];
$botonActualizar=$_POST['actualizar'];
if (isset($botonActualizar)) {
	$tabla="regional";
	$where="id_regi=$a";
	$columna="nombre_regi";
	$columnaDos="id_regi";
	$nombreRegion="'$nombreRegional'";
	$tablaDos="centro";
	$actualizarCentro=actualizar($mysqli, $tablaDos, $columnaDos, $nombreRegion, $where);
	$actualizarRegional=actualizar($mysqli, $tabla, $columna, $nombreRegion, $where);


}else{
	$tabla="regional";
	$where="id_regi=$a";
	$tablaDos="centro";
	$whereDos="id_regi=$a";
	$eliminar=eliminar($mysqli, $tabla, $where);
	$eliminarA=eliminar($mysqli, $tablaDos, $whereDos);
	header("Location:../eliminarRegion.php?mensaje=$a");
}













?>