<?php

include("baseDatos.php");

 function consultar($mysqli,$tabla,$parametros='*', $where)
 {

	$query="SELECT $parametros FROM $tabla WHERE $where";
	$resultado=mysqli_query($mysqli, $query);
	return $resultado;
}


function insertar($mysqli, $table,$param){
		$query="INSERT INTO $table
		VALUES (".$param.")
		";
		$resultado=mysqli_query($mysqli,$query);

}	

function eliminar($mysqli, $table,$where){
		$query="DELETE FROM $table
		WHERE $where
		";
		$resultado=mysqli_query($mysqli,$query);
}

function actualizar($mysqli, $table, $colum, $value, $where){
		$query="UPDATE $table
		SET $colum=$value
		WHERE $where
		";
		$resultado=mysqli_query($mysqli,$query);
}




?>