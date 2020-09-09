<?php
include("baseDatos.php");
include("querys.php");

$idCentro=(int)$_POST['centro'];


$tabla="centro";
$where="id_cent=$idCentro";
// $tablaDos="centro";
// $whereDos="id_regi=$a";


$eliminar=eliminar($mysqli, $tabla, $where);
// $eliminarA=eliminar($mysqli, $tablaDos, $whereDos);
header("Location:../eliminarCentro.php");




?>