<?php

require ("baseDatos.php");



$query="SELECT * FROM regional";

$resultado=mysqli_query($mysqli, $query) or die("Error".pg_last_error());
$numReg=mysqli_num_rows($resultado);
// $fila=mysqli_fetch_array($resultado);
// if ($numReg>0) {

//     // while ($fila=mysqli_fetch_array($resultado)) {

//     //     echo "<option value=".$fila['nombre_regi'].">".$fila['nombre_regi']."</option>";
//     // }

//   return $resultado;
// }else{
//     echo "No hay datos en la base de datos";
// }

?>