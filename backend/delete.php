<?php
include("baseDatos.php");
include("querys.php");

$a=(int)$_POST['region'];

$tabla="regional";
$where="id_regi=$a";
$tablaDos="centro";
$whereDos="id_regi=$a";


$eliminar=eliminar($mysqli, $tabla, $where);
$eliminarA=eliminar($mysqli, $tablaDos, $whereDos);
header("Location:../eliminarRegion.php?mensaje=$a");




?>