<?php

require ("baseDatos.php");

$id=(int)$idPrograma;


$consultas="SELECT * FROM instructor 
WHERE programa='$id";

$resul2=mysqli_query($mysqli, $consultas) or die("Erroaar");
$totalRegistros=mysqli_num_rows($resul2);
if ($numReg>0) {
	echo "<option value='-1'>Seleccione un programa...</option>";
	while ($fila=mysqli_fetch_array($resultado)) {

		echo "<option value=".$fila['id_inst'].">".$fila['nombres_inst']."</option>";
	}
}else{
	echo "No hay datos en la base de datos";
}

?>