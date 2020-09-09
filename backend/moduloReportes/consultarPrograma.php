<?php

require ("baseDatos.php");

$id=(int)$idCentro;


$consultas="SELECT * FROM programa
WHERE id_centro=$id";

$resul2=mysqli_query($mysqli, $consultas) or die("Error".pg_last_error());
$totalRegistros=mysqli_num_rows($resul2);
if ($numReg>0) {

    while ($fila=mysqli_fetch_array($resultado)) {

        echo "<option value=".$fila['id_prog'].">".$fila['nombre_prog']."</option>";
    }
}else{
    echo "No hay datos en la base de datos";
}

?>