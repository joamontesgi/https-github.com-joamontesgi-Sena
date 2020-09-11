<?php
require ("baseDatos.php");

if (isset($idRegiones)) {
	
$consultas="SELECT * FROM centro
WHERE id_regi='$idRegiones'";
$resul=mysqli_query($mysqli, $consultas) or die("Error");
$totalRegistros=mysqli_num_rows($resul);

}else{
	$consultas="SELECT * FROM centro
";
$resul=mysqli_query($mysqli, $consultas) or die("Error");
$totalRegistros=mysqli_num_rows($resul);
}



?>