<?php
include("baseDatos.php");
include("querys.php");
$pregunta1=(int)(int)$_POST['pre1'];
$pregunta2=(int)$_POST['pre2'];
 $pregunta3=(int)$_POST['pre3'];
 $pregunta4=(int)$_POST['pre4'];
 $pregunta5=(int)$_POST['pre5'];
 $pregunta6=(int)$_POST['pre6'];
 $pregunta7=(int)$_POST['pre7'];
 $pregunta8=(int)$_POST['pre8'];
 $pregunta9=(int)$_POST['pre9'];
 $pregunta10=(int)$_POST['pre10'];
 $pregunta11=(int)$_POST['pre11'];
 $pregunta12=(int)$_POST['pre12'];
$dateTime = (new DateTime("now", new DateTimeZone('America/Lima')))->format('Y-m-d, H:i:s');
 $hora = (new DateTime("now", new DateTimeZone('America/Lima')))->format('H:i:s');


$tabla="resultado (resu_conocimiento1,resu_conocimiento2,resu_metodologia3, resu_metodologia4, resu_metodologia5, resu_cumplimiento6, resu_cumplimiento7, resu_calidad_humana8, resu_calidad_humana9, resu_calidad_humana10, resu_evaluacion11, resu_evaluacion12, date)";
 $values="$pregunta1,$pregunta2,$pregunta3,$pregunta4,$pregunta5,$pregunta6,$pregunta7,$pregunta8,$pregunta9,$pregunta10,$pregunta11,$pregunta12, '$dateTime'";
		
			 	$consulta=insertar($mysqli, $tabla, $values);
			 

// if(isset($_POST)){
// 		for ($i=1; $i <= 12 ; $i++) { 
// 			$pregunta[$i]=(int)$_POST["pre$i"];
// 			$tabla="resultado (resu_conocimiento1,resu_conocimiento2,resu_metodologia3, resu_metodologia4, resu_metodologia5, resu_cumplimiento6, resu_cumplimiento7, resu_calidad_humana8, resu_calidad_humana9, resu_calidad_humana10, resu_evaluacion11, resu_evaluacion12)";
        
	
// 			echo $pregunta[$i];
// 			 $values+="$pregunta[$i]";
		
// 			 	
			


		
// 			}
			 	// $consulta=insertar($mysqli, $tabla, $values);


			  

// }


// insert into resultado(1,2,3) values ($pregunt[$i])