<?php
include("baseDatos.php");
include("querys.php");

$idFicha=(int)$_POST['ficha'];


$tabla="fichas";
$where="id_ficha=$idFicha";
// $tablaDos="centro";
// $whereDos="id_regi=$a";


$eliminar=eliminar($mysqli, $tabla, $where);
// $eliminarA=eliminar($mysqli, $tablaDos, $whereDos);
header("Location:../eliminarFicha.php");




?>