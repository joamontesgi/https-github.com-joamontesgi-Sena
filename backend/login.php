<?php
include("baseDatos.php");
// error_reporting(0);
include("activeSession.php");
include("querys.php");

// Recibo las variables de la vista index.php por método POST
$documento=$_POST['user'];
$pass_user=$_POST['pass'];


if($documento==$pass_user){


//Declaro variables para el login
$dateTime = (new DateTime("now", new DateTimeZone('America/Lima')))->format('Y-m-d, H:i:s');
$hora = (new DateTime("now", new DateTimeZone('America/Lima')))->format('H:i:s');


//Parámetros para la función
$tablaUno='calidad';
$parametrosUno='id_cali, nombre_cali, id_rol';
//Correo para identificar el instructor
$correoUno="id_cali=$documento AND id_cali=$pass_user";
//Llamado de la función consultar
$consult=consultar($mysqli,$tablaUno, $parametrosUno, $correoUno);

//Extraer resultados
$extraer = mysqli_fetch_array($consult);

//Si todas las variables existen
if(isset($extraer)){


	 //Extraigo de la base de datos para insertar en Login
	 $nombreCalidad=$extraer['nombre_cali'];
	 //Extraigo de la base de datos para insertar en Login
	 $rol=$extraer['id_rol'];

	 //VARIABLES GLOBALES
	 $_SESSION['id_cali']=$extraer['id_cali'];
	 $_SESSION['nombre_cali']=$extraer['nombre_cali'];
	 $_SESSION['id_rol']=$extraer['id_rol'];

	 //Variable global
	 echo "El nombre es", $_SESSION['nombre_cali'];
	 $name_user1= $_SESSION['nombre_cali'];
	

	 header ("Location:../inicioCalidad.php");

	//INSERTO DATOS EN LOGIN
	$tabla='login(user_id, date, time, name_sena, rol)';
	$parametrosInsertar="('".$documento."','".$dateTime."','".$hora."','".$nombreCalidad."','".$rol."')";

	$insertar=insertar($mysqli, $tabla, $parametrosInsertar);
	   
	//Parámetros para la función
	$tableTwo='login';
	$ParamsTwo='user_id';
	//Correo para identificar el instructor
	$Where="name_sena='$name_user'";

	//Variables para insertar en la tabla login

$consultTwo=consultar($mysqli,$tableTwo, $ParamsTwo, $Where);


$extraerAgain = mysqli_fetch_array($consultTwo);

	 echo "La identificación es:",  $identificacion=$extraerAgain['user_id'];
	 // echo "sesion:",  $_SESSION['name_sena'];












}else{
	
//Parámetros para la función
$tableTwo='aprendiz';
$ParamsTwo='nombres_apre, correo, id_apre, id_rol';
//Correo para identificar el aprendiz
$Where="id_apre=$documento AND id_apre=$documento";



$consultTwo=consultar($mysqli,$tableTwo, $ParamsTwo, $Where);
	$extraerAgain = mysqli_fetch_array($consultTwo);
 	//Extraigo de la base de datos para insertar en Login
	 $nombreAprendiz=$extraerAgain['nombres_apre'];
	 //Extraigo de la base de datos para insertar en Login
	 $rol=$extraerAgain['id_apre'];
	 //VARIABLES GLOBALES
	 $_SESSION['id_apre']=$extraerAgain['id_apre'];
	 $_SESSION['nombres_apre']=$extraerAgain['nombres_apre'];
	 $_SESSION['id_rol']=$extraerAgain['id_rol'];
	 //Variable global
	 echo "El nombre es", $_SESSION['nombres_apre'];
	 $name_user2= $_SESSION['nombres_apre'];
	 $tabla='login(user_id, date, time, name_sena, rol)';
	 $parametrosInsertar="('".$documento."','".$dateTime."','".$hora."', '".$nombreAprendiz."', '".$rol."')";
	//INSERTO DATOS EN LOGIN
	$insertar=insertar($mysqli, $tabla, $parametrosInsertar);
	//Parámetros para la función
	$tableTwo='login';
	$ParamsTwo='user_id';
	//Correo para identificar el instructor
	$Where="name_sena='$name_user'";
	header ("Location:../inicioAprendiz.php");
}



}else{

	 header ("Location:../index.php");

}




?>