<?php

require ("baseDatos.php");

$id=(int)$idFicha;


$consultas="SELECT * FROM programa
WHERE id_ficha=$id";

$resul2=mysqli_query($mysqli, $consultas) or die("Error".pg_last_error());
$totalRegistros=mysqli_num_rows($resul2);


?>