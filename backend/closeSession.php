<?php

 session_start();
 unset($_SESSION['nombre_cali']);
 unset($_SESSION['nombres_apre']);
 header("Location: ../index.php");

?>
