<?php

$idFicha=$_POST['id'];

$html="";

if (isset($idFicha)) {
	require ("backend/baseDatos.php");

	include("backend/consultarPrograma.php");
	echo "<option value='-1'>Seleccione un programa...</option>";
	while($row = mysqli_fetch_array($resul2)){ 

		$html.="<option value=".$row['id_prog'].">".$row['nombre_prog']."</option>";

	}            
}else{
	$html="No hay datos en la base de datos";
}

echo $html;



?>