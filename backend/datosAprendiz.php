<?php
require ("baseDatos.php");
require ("querys.php");

$documento=(int)$_POST['documento'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$foto=addslashes(file_get_contents($_FILES['foto']['tmp_name']));



$rol=2;

$tabla="aprendiz (id_apre, nombres_apre, correo, imagen,  id_rol)";
$parametros="$documento, '$nombre', '$correo', '$foto', $rol";

$insertar=insertar($mysqli, $tabla, $parametros);
header("Location:../crearAprendiz.php");