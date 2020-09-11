<?php
require ("backend/baseDatos.php");

$idPrograma=$_POST['id'];



$consultas="SELECT * FROM instructor 
WHERE programa='$idPrograma'";

$resul2=mysqli_query($mysqli, $consultas) or die("Error");









// $html="";

// if (isset($idPrograma)) {
// 	require ("backend/baseDatos.php");

// 	include("backend/consultarInstructor.php");

	
// 	while($row = mysqli_fetch_array($resultado)){ 
// 	    $html.="<option value=".$row['instructor.id_inst'].">".$row['instructor.nombres_inst']."</option>";
// 	}            
// }else{
//     $html="No hay datos en la base de datos";
// }

// echo $html;



?>