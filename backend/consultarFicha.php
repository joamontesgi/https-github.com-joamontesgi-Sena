<?php

require ("baseDatos.php");


if(isset($idCentro)){


	$id=(int)$idCentro;


	$consultas="SELECT * FROM fichas
	WHERE id_centro=$id";

	$resul2=mysqli_query($mysqli, $consultas) or die("Error");
	$totalRegistros=mysqli_num_rows($resul2);
	

}else{

	$consultas2="SELECT * FROM fichas";

	$resul1=mysqli_query($mysqli, $consultas2) or die("Error");
	$totalRegistros1=mysqli_num_rows($resul1);


}





?>