<?php

$idCentro=$_POST['id'];
$html="";

if (isset($idCentro)) {
	require ("backend/baseDatos.php");

	include("backend/consultarFicha.php");

	
	while($row = mysqli_fetch_array($resul2)){ 

	     $html.="<option value=".$row['id_ficha'].">".$row['numero_ficha']."</option>";

	}            
}else{
    $html="No hay datos en la base de datos";
}

echo $html;



?>