<?php
include("baseDatos.php");
include("querys.php");

$programa=(int)$_POST['programa'];

$tabla="programa";
$where="id_prog=$programa";
// $tablaDos="centro";
// $whereDos="id_regi=$a";


$eliminar=eliminar($mysqli, $tabla, $where);
// $eliminarA=eliminar($mysqli, $tablaDos, $whereDos);
header("Location:../eliminarPrograma.php");
