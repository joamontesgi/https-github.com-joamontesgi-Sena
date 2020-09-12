<?php

require ("baseDatos.php");



$consultas="SELECT * FROM programa
";

$resul2=mysqli_query($mysqli, $consultas) or die("Error".pg_last_error());
$totalRegistros=mysqli_num_rows($resul2);


?>