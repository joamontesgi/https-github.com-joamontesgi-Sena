<?php
require ("backend/baseDatos.php");


$idPrograma=$_POST['id'];



$consultas="SELECT * FROM instructor 
WHERE programa='$idPrograma'";

$resul2=mysqli_query($mysqli, $consultas) or die("Error");


$i=1;

 
while($row = mysqli_fetch_array($resul2)){ 
	echo "Instructor número ",$i;
	echo "<br>";
	echo "<i> Nombre del instructor: </i>","<b>", $row['nombres_inst']; 
	echo "</b>";
	echo "<br>";
	echo " <i> Correo del instructor:  </i>","<b>", $row['correo'];
	echo "</b>";
	echo "<br>";
	echo "<hr>";
	$i=$i+1;
	
}   






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