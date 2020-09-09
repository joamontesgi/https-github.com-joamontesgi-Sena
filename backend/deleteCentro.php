<?php

require ("baseDatos.php");



$consultas="SELECT id_cent, nombre_cent FROM centro
";

$resul=mysqli_query($mysqli, $consultas) or die("Error".pg_last_error());
$totalRegistros=mysqli_num_rows($resul);
// if ($numReg>0) {

//     while ($fila=mysqli_fetch_array($resultado)) {

//         echo "<option value=".$fila['nombre_cent'].">".$fila['nombre_cent']."</option>";
//     }
// }else{
//     echo "No hay datos en la base de datos";
// }

?>