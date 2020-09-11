<?php

require ("baseDatos.php");

$id=(int)$idFicha;


$consultas="SELECT * FROM programa
WHERE id_ficha=$id";

$resul2=mysqli_query($mysqli, $consultas) or die("Error".pg_last_error());
$totalRegistros=mysqli_num_rows($resul2);
if ($totalRegistros>0) {

	echo "<option value='-1'>Seleccione un programa...</option>";
    while ($fila=mysqli_fetch_array($resul2)) {

        echo "<option value=".$fila['id_prog'].">".$fila['nombre_prog']."</option>";
    }
}

?>