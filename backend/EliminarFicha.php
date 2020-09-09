<?php
require ("baseDatos.php");
$consultas="SELECT * 
FROM fichas";

$resul2=mysqli_query($mysqli, $consultas) or die("Error");
$totalRegistros=mysqli_num_rows($resul2);


 
?>