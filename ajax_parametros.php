<?php

$idRegiones=$_POST['id'];
$html="";

if (isset($idRegiones)) {
	require ("backend/baseDatos.php");
	include("backend/consultarCentro.php");

	
	while($row = mysqli_fetch_array($resul)){ 
	    $html.="<option value=".$row['id_cent'].">".$row['nombre_cent']."</option>";
	}            
}else{
    $html="No hay datos en la base de datos";
}

echo $html;



?>