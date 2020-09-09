<?php

echo session_id();
session_start();

error_reporting(0);

$nombreCalidad=$_SESSION['nombre_cali'];

$nombreApre=$_SESSION['nombres_apre'];

if ( ($nombreApre== null || $nombreApre=='') AND ($nombreCalidad== null || $nombreCalidad=='') )   {

     header("Location: index.php");

}



?>